<!-- Role -->
              <div>
                  <label for="role" class="block text-sm font-medium text-gray-700 mb-1">
                      Role <span class="text-red-500">*</span>
                  </label>
                  <select id="role" name="role" required
                      class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                      <option value="">-- Select Role --</option>
                      <option value="presenter">Presenter</option>
                      <option value="participant">Participant</option>
                      <option value="observer">Observer</option>
                  </select>
              </div>
              <!-- Gender -->
              <div>
                  <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">
                      Gender <span class="text-red-500">*</span>
                  </label>
                  <select id="gender" name="gender" required
                      class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                      <option value="">-- Select Gender --</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                  </select>
              </div>
              <!-- Institution Name -->
              <div>
                  <label for="institution" class="block text-sm font-medium text-gray-700 mb-1">
                      Institution Name <span class="text-red-500">*</span>
                  </label>
                  <input type="text" id="institution" name="institution" required
                      class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              </div>
              <!-- Attendance Method -->
              <div>
                  <label for="attendance" class="block text-sm font-medium text-gray-700 mb-1">
                      Attendance Method <span class="text-red-500">*</span>
                  </label>
                  <select id="attendance" name="attendance" required
                      class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                      <option value="">-- Select Attendance Method --</option>
                      <option value="online">Online</option>
                      <option value="offline">Offline</option>
                      <option value="hybrid">Hybrid</option>
                  </select>
              </div>
              <!-- Phone -->
              <div>
                  <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                      Phone <span class="text-red-500">*</span>
                  </label>
                  <input type="tel" id="phone" name="phone" required
                      class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              </div>
              <!-- Origin -->
              <div>
                  <label for="origin" class="block text-sm font-medium text-gray-700 mb-1">
                      Origin <span class="text-red-500">*</span>
                  </label>
                  <select id="origin" name="origin" required
                      class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                      <option value="">-- Select Origin --</option>
                      <option value="indonesia">Indonesia</option>
                      <option value="malaysia">Malaysia</option>
                      <option value="singapore">Singapore</option>
                      <option value="thailand">Thailand</option>
                      <option value="philippines">Philippines</option>
                      <option value="other">Other</option>
                  </select>
              </div>
              <!-- Registration Category -->
              <div>
                  <label for="category" class="block text-sm font-medium text-gray-700 mb-1">
                      Registration Category <span class="text-red-500">*</span>
                  </label>
                  <select id="category" name="category" required
                      class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                      <option value="">-- Select Category --</option>
                      <option value="student">Student</option>
                      <option value="academic">Academic</option>
                      <option value="professional">Professional</option>
                      <option value="industry">Industry</option>
                  </select>
              </div>
          </div>
            <!-- Abstract Form (Presenter Only) -->
            <div id="abstractSection" class="hidden">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                        <i class="fas fa-file-text mr-2"></i>
                        Abstract Form (Presenter Only)
                    </h3>
                    
                    <!-- Title -->
                    <div class="mb-4">
                        <label for="abstractTitle" class="block text-sm font-medium text-gray-700 mb-1">
                            Title <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="abstractTitle" name="abstractTitle"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <!-- Upload Abstract -->
                    <div>
                        <label for="abstractFile" class="block text-sm font-medium text-gray-700 mb-1">
                            Upload Abstract <span class="text-red-500">*</span>
                            <span class="text-xs text-gray-500">(PDF, DOC, DOCX only - Max 2MB)</span>
                        </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md hover:border-blue-400 transition-colors duration-200">
                            <div class="space-y-1 text-center">
                                <i class="fas fa-cloud-upload-alt text-gray-400 text-3xl"></i>
                                <div class="flex text-sm text-gray-600">
                                    <label for="abstractFile" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                        <span>Upload a file</span>
                                        <input id="abstractFile" name="abstractFile" type="file" class="sr-only" accept=".pdf,.doc,.docx">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PDF, DOC, DOCX up to 2MB</p>
                            </div>
                        </div>
                        <div id="abstractFileName" class="mt-2 text-sm text-gray-600 hidden"></div>
                    </div>
                </div>
            </div>
            <!-- Payment Proof Section -->
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-yellow-800 mb-4 flex items-center">
                    <i class="fas fa-credit-card mr-2"></i>
                    Upload Payment Proof <span class="text-red-500">*</span>
                </h3>
                
                <!-- Payment Instructions -->
                <div class="bg-white border border-yellow-300 rounded-md p-4 mb-4">
                    <p class="text-sm text-gray-700 mb-2">Please make your payment to:</p>
                    <div class="space-y-1 text-sm">
                        <div><strong>BANK Name:</strong> BNI</div>
                        <div><strong>Account Number:</strong> 7088708851</div>
                        <div><strong>Account Holder:</strong> BPL 004 BLU UNIMED</div>
                    </div>
                    <div class="mt-3 p-2 bg-blue-50 rounded border border-blue-200">
                        <div class="text-sm font-medium text-blue-800">Registration Fee:</div>
                        <div id="registrationFee" class="text-lg font-bold text-blue-900">$150.00 USD</div>
                    </div>
                </div>
                <!-- Upload Payment Proof -->
                <div>
                    <label for="paymentProof" class="block text-sm font-medium text-gray-700 mb-1">
                        Payment Proof <span class="text-red-500">*</span>
                        <span class="text-xs text-gray-500">(PDF, JPG, JPEG, PNG only - Max 3MB)</span>
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md hover:border-yellow-400 transition-colors duration-200">
                        <div class="space-y-1 text-center">
                            <i class="fas fa-receipt text-gray-400 text-3xl"></i>
                            <div class="flex text-sm text-gray-600">
                                <label for="paymentProof" class="relative cursor-pointer bg-white rounded-md font-medium text-yellow-600 hover:text-yellow-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-yellow-500">
                                    <span>Upload payment proof</span>
                                    <input id="paymentProof" name="paymentProof" type="file" class="sr-only" accept=".pdf,.jpg,.jpeg,.png" required>
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PDF, JPG, JPEG, PNG up to 3MB</p>
                        </div>
                    </div>
                    <div id="paymentFileName" class="mt-2 text-sm text-gray-600 hidden"></div>
                </div>
            </div>
            <!-- Terms and Conditions -->
            <div class="flex items-start">
                <input id="terms" name="terms" type="checkbox" required
                    class="mt-1 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="terms" class="ml-2 text-sm text-gray-700">
                    I agree to the <a href="#" class="text-blue-600 hover:text-blue-500 underline">Terms and Conditions</a> 
                    and <a href="#" class="text-blue-600 hover:text-blue-500 underline">Privacy Policy</a>
                    <span class="text-red-500">*</span>
                </label>
            </div>