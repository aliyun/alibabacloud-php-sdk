<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateCertificateResponseBody extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the certificate.
     *
     * @example acs:kms:cn-hangzhou:154035569884****:certificate/98e85c94-52d0-40c9-b3b2-afda52f4****
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the certificate. It is the globally unique identifier (GUID) of the certificate in Certificates Manager.
     *
     * @example 9a28de48-8d8b-484d-a766-dec4****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The CSR in the PEM format.
     *
     * @example -----BEGIN CERTIFICATE REQUEST-----\\nMIIDADCCAegCAQAwgboxCzAJBgNVBAYTAkNOMREwDwYDVQQIEwhaaGVqaWFuZzER\\n****\\nmkj4rg==\\n-----END CERTIFICATE REQUEST-----\\n
     *
     * @var string
     */
    public $csr;

    /**
     * @description The ID of the request.
     *
     * @example 15a735a1-8fe6-45cc-a64c-3c4ff839334e
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'arn'           => 'Arn',
        'certificateId' => 'CertificateId',
        'csr'           => 'Csr',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
