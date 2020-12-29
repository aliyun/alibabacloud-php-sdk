<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180713\Models;

use AlibabaCloud\Tea\Model;

class CreateUserCertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $certId;
    protected $_name = [
        'requestId' => 'RequestId',
        'certId'    => 'CertId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        return $model;
    }
}
