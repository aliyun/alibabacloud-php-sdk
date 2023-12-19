<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateCertificateRequestRequest extends Model
{
    /**
     * @description The domain name that you want to bind to the certificate. You can specify only one domain name.
     *
     * > The domain name must match the certificate specifications that you specify for the **ProductCode** parameter. If you apply for a single-domain certificate, you must specify a single domain name for this parameter. If you apply for a wildcard certificate, you must specify a wildcard domain name such as `*.aliyundoc.com` for this parameter.
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The email address of the applicant.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The phone number of the applicant.
     *
     * @example 1390000****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The specifications of the certificate. Valid values:
     *
     *   **digicert-free-1-free**: DigiCert single-domain DV certificate in 3 months free trial. This is the default value.
     *   **symantec-free-1-free**: DigiCert single-domain DV certificate in 1 year free trial.
     *   **symantec-dv-1-starter**: DigiCert wildcard DV certificate.
     *   **geotrust-dv-1-starter**: GeoTrust single-domain DV certificate.
     *   **geotrust-dv-w-starter**: GeoTrust wildcard DV certificate.
     *   **globalsign-dv-1-personal**: GlobalSign single-domain DV certificate.
     *   **globalsign-dv-w-advanced**: GlobalSign wildcard DV certificate.
     *
     * @example digicert-free-1-free
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The name of the applicant.
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
     * For more information about the verification methods, see [Verify the ownership of a domain name](~~48016~~).
     * @example DNS
     *
     * @var string
     */
    public $validateType;
    protected $_name = [
        'domain'       => 'Domain',
        'email'        => 'Email',
        'phone'        => 'Phone',
        'productCode'  => 'ProductCode',
        'username'     => 'Username',
        'validateType' => 'ValidateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return CreateCertificateRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }

        return $model;
    }
}
