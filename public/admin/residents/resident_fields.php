 <fieldset class="flex flex-col gap-5">
     <div class="mt-8 grid lg:grid-cols-3 gap-4">
         <div>
             <label for="first_name" class="text-md text-gray-700 block mb-1 font-medium">First Name: <span class="text-red-500">*</span></label>
             <input type="text" name="first_name" id="first_name" class="w-full" placeholder="Enter your name" />
         </div>
         <div>
             <label for="middle_name" class="text-md text-gray-700 block mb-1 font-medium">Middle Name: <span class="text-red-500">*</span></label>
             <input type="text" name="middle_name" id="middle_name" class="w-full" placeholder="Enter your name" />
         </div>
         <div>
             <label for="last_name" class="text-md text-gray-700 block mb-1 font-medium">Last Name: <span class="text-red-500">*</span></label>
             <input type="text" name="last_name" id="last_name" class="w-full" placeholder="Enter your name" />
         </div>
     </div>

     <div>
         <label for="email" class="text-md text-gray-700 block mb-1 font-medium">Email Adress: <span class="text-red-500">*</span></label>
         <input type="email" name="email" id="email" class="w-full" placeholder="yourmail@gmail.com" />
     </div>

     <div class="grid lg:grid-cols-3 gap-4">
         <div>
             <label for="contact_number" class="text-md text-gray-700 block mb-1 font-medium">Contact Number: <span class="text-red-500">*</span></label>
             <input type="number" name="contact_number" id="contact_number" class="w-full" placeholder="(ex. 09645234232)" />
         </div>
         <div>
             <label for="dateofbirth" class="text-md text-gray-700 block mb-1 font-medium">Date of Birth: <span class="text-red-500">*</span></label>
             <input type="date" name="dateofbirth" id="dateofbirth" class="w-full" placeholder="(ex. developer)" />
         </div>
         <div>
             <label for="gender" class="text-md text-gray-700 block mb-1 font-medium">Gender:</label>
             <select id="gender" class="w-full" name="resident[gender]">
                 <option value="">Select Gender</option>
                 <option value="male" <?php //if ($resident->gender === "male") echo "selected" 
                                        ?>>Male</option>
                 <option value="female" <?php //if ($resident->gender === "female") echo "selected" 
                                        ?>>Female</option>
             </select>
         </div>
     </div>

     <div>
         <label for="address" class="text-md text-gray-700 block mb-1 font-medium">Address: <span class="text-red-500">*</span></label>
         <textarea type="text" name="address" id="address" class="w-full" placeholder="Enter your address"></textarea>
     </div>
 </fieldset>