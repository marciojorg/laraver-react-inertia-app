import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";

export default function Index({ auth, products }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Products
                </h2>
            }
        >
            <Head title="Projects" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            <table className="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-gray-500">
                                    <tr className="text-nowrap">
                                        <th className="px-3 py-2">ID</th>
                                        <th className="px-3 py-2">Name</th>
                                        <th className="px-3 py-2">Status</th>
                                        <th className="px-3 py-2">Category</th>
                                        <th className="px-3 py-2">Brand</th>
                                        <th className="px-3 py-2 text-nowrap">
                                            Create Date
                                        </th>

                                        <th className="px-3 py-2">
                                            Created By
                                        </th>
                                        <th className="px-3 py-2 text-right">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {products.data.map((project, index) => (
                                        <tr
                                            key={index}
                                            className="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                        >
                                            <td className="px-3 py-3">
                                                {project.id}
                                            </td>

                                            <td className="px-3 py-3">
                                                {project.name}
                                            </td>
                                            <td className="px-3 py-3">
                                                {project.status}
                                            </td>
                                            <td className="px-3 py-3">
                                                {project.category.name}
                                            </td>
                                            <td className="px-3 py-3">
                                                {project.brand.name}
                                            </td>
                                            <td className="px-3 py-3">
                                                {project.created_at}
                                            </td>
                                            <td className="px-3 py-3">
                                                {project.createdBy.name}
                                            </td>
                                            <td className="px-3 py-3">
                                                <Link
                                                    href={route(
                                                        "product.edit",
                                                        project.id
                                                    )}
                                                    className="font-medium text-blue-600
                                                        dark:text-blue-500 hover:underline mx-1"
                                                >
                                                    Edit
                                                </Link>

                                                <Link
                                                    href={route(
                                                        "product.destroy",
                                                        project.id
                                                    )}
                                                    className="font-medium text-red-600
                                                        dark:text-red-500 hover:underline mx-1"
                                                >
                                                    Delete
                                                </Link>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
