<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6">
            <h1 class="text-2xl font-semibold text-gray-700 mb-4">Create a New Lead</h1>
            <form id="lead-form" class="space-y-4">
                <input type="hidden" name="api_key" id="api_key" value="MTIzMDgbd283795c5e51d3b7efd4aefbc404fb8">
                <input type="hidden" name="redirect_link" id="redirect_link" value="https://regression.pabau.me">

                <div>
                    <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" id="first_name" name="Fname" placeholder="First Name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div>
                    <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" id="last_name" name="Lname" placeholder="Last Name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div>
                    <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile</label>
                    <input type="text" id="mobile" name="mobile" placeholder="Mobile" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
                <div>
                    <label for="lead_source" class="block text-sm font-medium text-gray-700">Lead Source</label>
                    <input type="text" id="lead_source" name="lead_source" placeholder="Lead Source" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="salutation" class="block text-sm font-medium text-gray-700">Salutation</label>
                    <input type="text" id="salutation" name="salutation" placeholder="Mr, Miss, etc." class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                    <input type="text" id="dob" name="dob" placeholder="d.m.Y" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="county" class="block text-sm font-medium text-gray-700">County<label>
                    <input type="text" id="county" name="county" placeholder="County" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <input type="text" id="city" name="city" placeholder="City" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="telephone" class="block text-sm font-medium text-gray-700">Telephone</label>
                    <input type="text" id="telephone" name="telephone" placeholder="Telephone" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="mobile_number" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                    <input type="text" id="mobile_number" name="mobile_number" placeholder="Mobile Number" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" id="address" name="address" placeholder="Address" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Subscribe Options</label>
                    <div class="mt-1 space-x-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="opt_letter" value="1" class="form-checkbox h-4 w-4 text-indigo-600">
                            <span class="ml-2 text-gray-700">Subscribe to Letters</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="opt_sms" value="1" class="form-checkbox h-4 w-4 text-indigo-600">
                            <span class="ml-2 text-gray-700">Subscribe to SMS</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="opt_newsletter" value="1" class="form-checkbox h-4 w-4 text-indigo-600">
                            <span class="ml-2 text-gray-700">Subscribe to Newsletters</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="opt_phone" value="1" class="form-checkbox h-4 w-4 text-indigo-600">
                            <span class="ml-2 text-gray-700">Subscribe to Phone Calls</span>
                        </label>
                    </div>
                </div>
                <div>
                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>