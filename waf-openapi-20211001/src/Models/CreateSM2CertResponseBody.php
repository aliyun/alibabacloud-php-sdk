<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class CreateSM2CertResponseBody extends Model
{
    /**
     * @example ***-cn-hangzhou
     *
     * @var string
     */
    public $certIdentifier;

    /**
     * @example D7861F61-5B61-46CE-A47C-***
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return CreateSM2CertResponseBody
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
