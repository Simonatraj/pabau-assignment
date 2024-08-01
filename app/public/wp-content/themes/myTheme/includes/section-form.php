<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
      <h1 id="success" class="hidden flex justify-center p-6">Form was successfully submitted. 🎉 </h1>
        <div class="p-6"  id="form">
            <h1 class="text-4xl font-semibold text-gray-700 mb-4">Create a New Lead</h1>
            <form id="lead-form" class="space-y-4">
                <input type="hidden" name="api_key" id="api_key" value="MTIzMDgbd283795c5e51d3b7efd4aefbc404fb8">
                <input type="hidden" name="redirect_link" id="redirect_link" value="https://regression.pabau.me">

                    <div class="border-b border-gray-900/10 pb-12">
      <p class="mt-1 text-2xl leading-6 text-gray-600">Please fill out the form below.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="first-name" class="block text-xl font-medium leading-6 text-gray-900">First name *</label>
          <div class="mt-2">
            <input type="text" id="first_name" name="Fname" placeholder="First Name"
            class="px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="last-name" class="block text-xl font-medium leading-6 text-gray-900">Last name *</label>
          <div class="mt-2">
            <input type="text" id="last_name" name="Lname" placeholder="Last Name" class="block px-4  w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="email" class="block text-xl font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-4">
          <label for="dob" class="block text-xl font-medium leading-6 text-gray-900">Date of birth</label>
          <div class="mt-2">
            <input id="dob" name="dob" type="date" autocomplete="dob" class="block w-full px-4 px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="lead_source" class="block text-xl font-medium leading-6 text-gray-900">How did you hear about us? </label>
          <div class="mt-2">
            <select id="lead_source" name="lead_source" autocomplete="lead_source-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 px-4  ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option value="">Please select source</option>
              <option value="facebook">Facebook</option>
              <option value="instagram">Instagram</option>
              <option value="linkedin">Linkedin</option>
            </select>
          </div>
        </div>

        <div class="col-span-full">
          <label for="address" class="block text-xl font-medium leading-6 text-gray-900">Address</label>
          <div class="mt-2">
            <input type="text" name="address" id="address" autocomplete="address" class="block px-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2 sm:col-start-1">
          <label for="city" class="block text-xl font-medium leading-6 text-gray-900">City</label>
          <div class="mt-2">
            <input type="text" name="city" id="city" autocomplete="address-level2" class="block px-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="telephone" class="block text-xl font-medium leading-6 text-gray-900">Telephone</label>
          <div class="mt-2">
            <input type="text" name="telephone" id="telephone" autocomplete="telephone" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 px-4 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="postal_code" class="block text-xl font-medium leading-6 text-gray-900">Postal Code</label>
          <div class="mt-2">
            <input type="text" name="post_code" id="postal_code" autocomplete="postal_code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 px-4 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-xl sm:leading-6">
          </div>
        </div>
      </div>
    </div>

                <div>
                    <button type="submit" class="text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-xl px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 me-2 mb-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>