<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateParamResponseBody extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $paramId;

    /**
     * @description Id of the request
     *
     * @example F8F613A9-DF1C-551A-88E1-397A3981A785
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'paramId'   => 'ParamId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramId) {
            $res['ParamId'] = $this->paramId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateParamResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamId'])) {
            $model->paramId = $map['ParamId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
