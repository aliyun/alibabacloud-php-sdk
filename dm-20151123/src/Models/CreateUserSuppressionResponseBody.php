<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class CreateUserSuppressionResponseBody extends Model
{
    /**
     * @description Request ID
     *
     * @example 1A846D66-5EC7-551B-9687-5BF1963DCFC1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Invalid address number
     *
     * @example 59511
     *
     * @var string
     */
    public $suppressionId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'suppressionId' => 'SuppressionId',
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
        if (null !== $this->suppressionId) {
            $res['SuppressionId'] = $this->suppressionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserSuppressionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuppressionId'])) {
            $model->suppressionId = $map['SuppressionId'];
        }

        return $model;
    }
}
