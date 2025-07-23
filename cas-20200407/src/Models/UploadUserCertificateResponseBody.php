<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class UploadUserCertificateResponseBody extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * @example 12345
     *
     * @var int
     */
    public $certId;

    /**
     * @description The ID of the request.
     *
     * @example BDB81BA2-E1F5-4D08-A2DD-4BE2BF44C90E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource.
     *
     * @example cas-upload-j2ofdb
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'certId' => 'CertId',
        'requestId' => 'RequestId',
        'resourceId' => 'ResourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadUserCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
