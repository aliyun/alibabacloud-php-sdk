<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class CreateCertsResponseBody extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * @example 123456-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The ID of the request.
     *
     * @example 5BBA38B1-07AE-559F-8766-AB50****C300
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCertsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
