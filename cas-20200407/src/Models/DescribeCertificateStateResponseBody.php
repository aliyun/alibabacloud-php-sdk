<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class DescribeCertificateStateResponseBody extends Model
{
    /**
     * @var string
     */
    public $certId;

    /**
     * @description The content of the certificate in the PEM format. For more information about the PEM format and how to convert certificate formats, see [What formats are used for mainstream digital certificates?](https://help.aliyun.com/document_detail/42214.html)
     *
     * >  This parameter is returned only when the value of the **Type** parameter is **certificate**. The value certificate indicates that the certificate is issued.
     *
     * @example ——BEGIN CERTIFICATE—— …… ——END CERTIFICATE——
     *
     * @var string
     */
    public $certificate;

    /**
     * @description The content that you need to write to the newly created file when you use the file verification method.
     *
     * >  This parameter is returned only when the value of the **Type** parameter is **domain_verify** and the value of the **ValidateType** parameter is **FILE**. The value domain_verify indicates that the verification of the domain name ownership is not complete, and the value FILE indicates that the file verification method is used.
     *
     * @example http://example.com/.well-known/pki-validation/fileauth.txt
     *
     * @var string
     */
    public $content;

    /**
     * @description The domain name to be verified when you use the file verification method. You must connect to the DNS server of the domain name and create a file on the server. The file is specified by the **Uri** parameter.
     *
     * >  This parameter is returned only when the value of the **Type** parameter is **domain_verify** and the value of the **ValidateType** parameter is **FILE**. The value domain_verify indicates that the verification of the domain name ownership is not complete, and the value FILE indicates that the file verification method is used.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The private key of the certificate in the PEM format. For more information about the PEM format and how to convert certificate formats, see [What formats are used for mainstream digital certificates?](https://help.aliyun.com/document_detail/42214.html)
     *
     * >  This parameter is returned only when the value of the **Type** parameter is **certificate**. The value certificate indicates that the certificate is issued.
     *
     * @example ——BEGIN RSA PRIVATE KEY—— …… ——END RSA PRIVATE KEY——
     *
     * @var string
     */
    public $privateKey;

    /**
     * @description The DNS record that you need to manage when you use the DNS verification method.
     *
     * >  This parameter is returned only when the value of the **Type** parameter is **domain_verify** and the value of the **ValidateType** parameter is **DNS**. The value domain_verify indicates that the verification of the domain name ownership is not complete, and the value DNS indicates that the DNS verification method is used.
     *
     * @example _dnsauth
     *
     * @var string
     */
    public $recordDomain;

    /**
     * @description The type of the DNS record that you need to add when you use the DNS verification method. Valid values:
     *
     *   **TXT**
     *   **CNAME**
     *
     * >  This parameter is returned only when the value of the **Type** parameter is **domain_verify** and the value of the **ValidateType** parameter is **DNS**. The value domain_verify indicates that the verification of the domain name ownership is not complete.
     *
     * @example TXT
     *
     * @var string
     */
    public $recordType;

    /**
     * @description You need to add a TXT record to the DNS records only when you use the DNS verification method.
     *
     * >  This parameter is returned only when the value of the **Type** parameter is **domain_verify** and the value of the **ValidateType** parameter is **DNS**. The value domain_verify indicates that the verification of the domain name ownership is not complete, and the value DNS indicates that the DNS verification method is used.
     *
     * @example 20200420000000223erigacv46uhaubchcm0o7spxi7i2isvjq59mlx9lucnkqcy
     *
     * @var string
     */
    public $recordValue;

    /**
     * @description The ID of the request.
     *
     * @example 082FAB35-6AB9-4FD5-8750-D36673548E76
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the certificate application order. Valid values:
     *
     *   **domain_verify**: **pending review**, which indicates that you have not completed the verification of the domain name ownership after you submit the certificate application.
     * >After you submit a certificate application, you must manually complete the verification of the domain name ownership. The CA reviews the certificate application only after the verification is complete. If you have not completed the verification of the domain name ownership, you can complete the verification based on the data returned by this operation.
     *
     *   **process**: **being reviewed**, which indicates that the certificate application is being reviewed by the CA.
     *
     *   **verify_fail**: **review failed**, which indicates that the certificate application failed to be reviewed.
     * >  If a certificate application fails to be reviewed, the information that you specified in the certificate application may be incorrect. We recommend that you call the [DeleteCertificateRequest](https://help.aliyun.com/document_detail/164109.html) operation to delete the certificate application order and resubmit a certificate application. After the order is deleted, the quota that is consumed for the order is released.
     *
     *   **certificate**: **issued**, which indicates that the certificate is issued.
     *
     *   **payed**: **pending application**, which indicates that you have not submitted a certificate application.
     *
     *   **unknow**: The status is **unknown**.
     *
     * @example domain_verify
     *
     * @var string
     */
    public $type;

    /**
     * @description The file that you need to create on the DNS server when you use the file verification method. **The value of this parameter contains the file path and file name.**
     *
     * >  This parameter is returned only when the value of the **Type** parameter is **domain_verify** and the value of the **ValidateType** parameter is **FILE**. The value domain_verify indicates that the verification of the domain name ownership is not complete, and the value FILE indicates that the file verification method is used.
     *
     * @example /.well-known/pki-validation/fileauth.txt
     *
     * @var string
     */
    public $uri;

    /**
     * @description The verification method of the domain name ownership. Valid values:
     *
     *   **DNS**: DNS verification. If you use this method, you must add a TXT record to the DNS records of the domain name in the management platform of the domain name.
     *   **FILE**: file verification. If you use this method, you must create a specified file on the DNS server.
     *
     * >  This parameter is returned only when the value of the **Type** parameter is **domain_verify**. The value domain_verify indicates that the verification of the domain name ownership is not complete.
     *
     * @example FILE
     *
     * @var string
     */
    public $validateType;
    protected $_name = [
        'certId' => 'CertId',
        'certificate' => 'Certificate',
        'content' => 'Content',
        'domain' => 'Domain',
        'privateKey' => 'PrivateKey',
        'recordDomain' => 'RecordDomain',
        'recordType' => 'RecordType',
        'recordValue' => 'RecordValue',
        'requestId' => 'RequestId',
        'type' => 'Type',
        'uri' => 'Uri',
        'validateType' => 'ValidateType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->recordDomain) {
            $res['RecordDomain'] = $this->recordDomain;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->recordValue) {
            $res['RecordValue'] = $this->recordValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->validateType) {
            $res['ValidateType'] = $this->validateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCertificateStateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RecordDomain'])) {
            $model->recordDomain = $map['RecordDomain'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['RecordValue'])) {
            $model->recordValue = $map['RecordValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['ValidateType'])) {
            $model->validateType = $map['ValidateType'];
        }

        return $model;
    }
}
