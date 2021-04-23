<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddDRMCertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
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
     * @return AddDRMCertificateResponseBody
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
