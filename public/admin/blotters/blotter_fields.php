 <fieldset class="flex flex-col gap-5">
     <div class="mt-8 grid lg:grid-cols-3 gap-4">
         <div>
             <label for="complainant" class="text-md text-gray-700 block mb-1 font-medium">Complainant: <span class="text-red-500">*</span></label>
             <input type="text" name="complainant" id="complainant" class="w-full" placeholder="Enter complainant's name" />
         </div>
         <div>
             <label for="datereported" class="text-md text-gray-700 block mb-1 font-medium">Date Reported: <span class="text-red-500">*</span></label>
             <input type="date" name="datereported" id="datereported" class="w-full" />
         </div>
         <div>
             <label for="respondent" class="text-md text-gray-700 block mb-1 font-medium">Respondent: <span class="text-red-500">*</span></label>
             <input type="text" name="respondent" id="respondent" class="w-full" placeholder="Enter respondent's name" />
         </div>
     </div>

     <div>
         <label for="complain" class="text-md text-gray-700 block mb-1 font-medium">Complain: <span class="text-red-500">*</span></label>
         <input type="text" name="complain" id="complain" class="w-full" placeholder="yourmail@gmail.com" />
     </div>

     <!-- <div class="grid lg:grid-cols-3 gap-4">
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
     </div> -->

     <div>
         <label for="description" class="text-md text-gray-700 block mb-1 font-medium">Description: <span class="text-red-500">*</span></label>
         <textarea type="text" name="description" id="description" class="w-full" placeholder="Enter complain description"></textarea>
     </div>
 </fieldset>