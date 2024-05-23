<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateParameterGroupResponseBody extends Model
{
    /**
     * @description The ID of the parameter template. You can call the [DescribeParameterGroups](https://help.aliyun.com/document_detail/144491.html) operation to query the IDs of parameter templates.
     *
     * @example rpg-q488w14xvsk****
     *
     * @var string
     */
    public $parameterGroupId;

    /**
     * @description The ID of the request.
     *
     * @example 7A41C147-C8D0-4DAE-A1A2-17EBCD60DFA1
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
     * @return CreateParameterGroupResponseBody
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
