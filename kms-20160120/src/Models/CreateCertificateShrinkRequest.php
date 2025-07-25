<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateCertificateShrinkRequest extends Model
{
    /**
     * @description Specifies whether the private key of the certificate can be exported for use. Valid values:
     *
     *   true: The private key of the certificate can be exported for use. This is the default value.
     *   false: The private key of the certificate cannot be exported for use. We recommend that you set this parameter to false to protect keys with a higher security level.
     *
     * @example true
     *
     * @var bool
     */
    public $exportablePrivateKey;

    /**
     * @description The type of the key. Valid values:
     *
     *   RSA_2048
     *   EC_P256
     *   EC_SM2
     *
     * This parameter is required.
     *
     * @example RSA_2048
     *
     * @var string
     */
    public $keySpec;

    /**
     * @description The certificate subject, which is the owner of the certificate.
     *
     * Specify the value in the distinguished name (DN) format, as defined in [RFC 2253](https://tools.ietf.org/html/rfc2253?spm=a2c4g.11186623.2.13.265f1a1cGFCn3Q). A DN is a sequence of relative distinguished names (RDNs).
     *
     * RDNs are key-value pairs in the format of `attribute1=value1,attribute2=value2`. Separate multiple RDNs with commas (,).
     *
     * The Subject parameter consists of the following fields:
     *
     *   CN: required. The name of the certificate subject.
     *   C: required. The two-character country or region code in the [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) standard. For example, CN indicates China.
     *   O: required. The legal name of the enterprise, company, organization, or institution.
     *   OU: required. The name of the department.
     *   ST: optional. The name of the province, municipality, autonomous region, or special administrative region.
     *   L: optional. The name of the city.
     *
     * This parameter is required.
     *
     * @example CN=userName,OU=kms,O=aliyun,C=CN
     *
     * @var string
     */
    public $subject;

    /**
     * @description The subject alternative names.
     *
     * A domain name list is supported. A maximum of 10 domain names are supported.
     *
     * @example ["test1.example.com","test2.example.com"]
     *
     * @var string
     */
    public $subjectAlternativeNamesShrink;
    protected $_name = [
        'exportablePrivateKey' => 'ExportablePrivateKey',
        'keySpec' => 'KeySpec',
        'subject' => 'Subject',
        'subjectAlternativeNamesShrink' => 'SubjectAlternativeNames',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportablePrivateKey) {
            $res['ExportablePrivateKey'] = $this->exportablePrivateKey;
        }
        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->subjectAlternativeNamesShrink) {
            $res['SubjectAlternativeNames'] = $this->subjectAlternativeNamesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCertificateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportablePrivateKey'])) {
            $model->exportablePrivateKey = $map['ExportablePrivateKey'];
        }
        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['SubjectAlternativeNames'])) {
            $model->subjectAlternativeNamesShrink = $map['SubjectAlternativeNames'];
        }

        return $model;
    }
}
