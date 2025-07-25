<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateForPackageRequestRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateCertificateForPackageRequestRequest extends Model
{
    /**
     * @description The company name of the certificate application.
     *
     * >  This parameter is available only when you apply for OV certificates. For more information, see [Manage company profiles](https://help.aliyun.com/document_detail/198289.html). If you want to apply for a DV certificate, you do not need to add a company profile.
     *
     * If you specify a company name, the information about the company that is configured in the **Information Management** module is used. If you do not specify this parameter, the information about the most recent company that is added to the **Information Management** module is used.
     *
     * @example A company
     *
     * @var string
     */
    public $companyName;

    /**
     * @description The content of the certificate signing request (CSR) file that is manually generated by using OpenSSL or Keytool for the domain name. The key algorithm in the CSR file must be Rivest-Shamir-Adleman (RSA) or elliptic-curve cryptography (ECC), and the key length of the RSA algorithm must be greater than or equal to 2,048 characters. For more information about how to create a CSR file, see [Create a CSR file](https://help.aliyun.com/document_detail/313297.html). If you do not specify this parameter, Certificate Management Service automatically creates a CSR file.
     *
     * A CSR file contains the information about your server and company. When you apply for a certificate, you must submit the CSR file to the CA. The CA signs the CSR file by using the private key of the root certificate and generates a public key file to issue your certificate.
     *
     * >  The \\*\\*CN\\*\\* field in CSR file specifies the domain name that is bound to the certificate. You must include the field in the parameter value.
     *
     * @example -----BEGIN CERTIFICATE REQUEST----- ...... -----END CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $csr;

    /**
     * @description The domain name that you want to bind to the certificate. The domain name must meet the following requirements:
     *
     *   The domain name must be a single domain name or a wildcard domain name. Example: `*.aliyundoc.com`.
     *   You can specify multiple domain names. Separate multiple domain names with commas (,). You can specify a maximum of five domain names.
     *   If you specify multiple domain names, the domain names must be only single domain names or only wildcard domain names. You cannot specify both single domain names and wildcard domain names.
     *
     * >  If you want to bind multiple domain names to the certificate, you must specify this parameter. You must specify at least one of the Domain parameter and the \\*\\*Csr\\*\\* parameter. If you specify both the Domain parameter and the \\*\\*Csr\\*\\* parameter, the value of the \\*\\*CN\\*\\* field in the \\*\\*Csr\\*\\* parameter is used as the domain name that is bound to the certificate.
     *
     * @example aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The email address of the applicant. After the CA receives your certificate application, the CA sends a verification email to the email address that you specify. You must log on to the mailbox, open the mail, and complete the verification of the domain name ownership based on the steps that are described in the email.
     *
     * If you do not specify this parameter, the information about the most recent contact that is added to the **Information Management** module is used. For more information about how to add a contact to the **Information Management** module, see [Manage contacts](https://help.aliyun.com/document_detail/198262.html).
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The contact phone number of the applicant. CA staff can call the phone number to confirm the information in your certificate application.
     *
     * If you do not specify this parameter, the information about the most recent contact that is added to the **Information Management** module is used. For more information about how to add a contact to the **Information Management** module, see [Manage contacts](https://help.aliyun.com/document_detail/198262.html).
     *
     * @example 1390000****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The specifications of the certificate that you want to apply for. Valid values:
     *
     *   **digicert-free-1-free** (default): DigiCert single-domain domain validated (DV) certificate, which is free and valid for 3 months. This value is available only on the China site (aliyun.com).
     *   **symantec-free-1-free**: DigiCert single-domain DV certificate, which is free and valid for 1 year. This value is available only on the China site (aliyun.com).
     *   **symantec-dv-1-starter**: DigiCert wildcard DV certificate.
     *   **symantec-ov-1-personal**: DigiCert single-domain organization validated (OV) certificate.
     *   **symantec-ov-w-personal**: DigiCert wildcard OV certificate.
     *   **geotrust-dv-1-starter**: GeoTrust single-domain DV certificate.
     *   **geotrust-dv-w-starter**: GeoTrust wildcard DV certificate.
     *   **geotrust-ov-1-personal**: GeoTrust single-domain OV certificate.
     *   **geotrust-ov-w-personal**: GeoTrust wildcard OV certificate.
     *   **globalsign-dv-1-personal**: GlobalSign single-domain DV certificate.
     *   **globalsign-dv-w-advanced**: GlobalSign wildcard DV certificate.
     *   **globalsign-ov-1-personal**: GlobalSign single-domain OV certificate.
     *   **globalsign-ov-w-advanced**: GlobalSign wildcard OV certificate.
     *   **cfca-ov-1-personal**: China Financial Certification Authority (CFCA) single-domain OV certificate, available only on the China site (aliyun.com).
     *   **cfca-ev-w-advanced**: CFCA wildcard OV certificate, available only on the China site (aliyun.com).
     *
     * @example symantec-free-1-free
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The name of the applicant.
     *
     * If you do not specify this parameter, the information about the most recent contact that is added to the **Information Management** module is used. For more information about how to add a contact to the **Information Management** module, see [Manage contacts](https://help.aliyun.com/document_detail/198262.html).
     *
     * @example Tom
     *
     * @var string
     */
    public $username;

    /**
     * @description The verification method of the domain name ownership. Valid values:
     *
     *   **DNS**: DNS verification. If you use this method, you must add a TXT record to the DNS records of the domain name in the management platform of the domain name. You must have operation permissions on domain name resolution to verify the ownership of the domain name.
     *   **FILE**: file verification. If you use this method, you must create a specified file on the DNS server. You must have administrative rights on the DNS server to verify the ownership of the domain name.
     *
     * For more information about the verification methods, see [Verify the ownership of a domain name](https://help.aliyun.com/document_detail/48016.html).
     *
     * @example DNS
     *
     * @var string
     */
    public $validateType;
    protected $_name = [
        'companyName' => 'CompanyName',
        'csr' => 'Csr',
        'domain' => 'Domain',
        'email' => 'Email',
        'phone' => 'Phone',
        'productCode' => 'ProductCode',
        'tags' => 'Tags',
        'username' => 'Username',
        'validateType' => 'ValidateType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->validateType) {
            $res['ValidateType'] = $this->validateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCertificateForPackageRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }

        return $model;
    }
}
