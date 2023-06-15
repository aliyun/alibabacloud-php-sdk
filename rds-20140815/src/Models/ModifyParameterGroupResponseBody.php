<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyParameterGroupResponseBody extends Model
{
    /**
     * @description The parameter template ID.
     *
     * @example rpg-13ppdh****
     *
     * @var string
     */
    public $parameterGroupId;

    /**
     * @description The request ID.
     *
     * @example 857DC00B-7B85-4853-8B27-AD65EB618BC6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterGroupId' => 'ParameterGroupId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterGroupId) {
            $res['ParameterGroupId'] = $this->parameterGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyParameterGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterGroupId'])) {
            $model->parameterGroupId = $map['ParameterGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
