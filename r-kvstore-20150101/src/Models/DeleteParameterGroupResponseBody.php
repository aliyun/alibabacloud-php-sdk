<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DeleteParameterGroupResponseBody extends Model
{
    /**
     * @description The parameter template ID, which is globally unique.
     *
     * @example sys-001*****
     *
     * @var string
     */
    public $paramGroupId;

    /**
     * @description Id of the request
     *
     * @example 2BE6E619-A657-42E3-AD2D-18F8428A****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'paramGroupId' => 'ParamGroupId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramGroupId) {
            $res['ParamGroupId'] = $this->paramGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteParameterGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamGroupId'])) {
            $model->paramGroupId = $map['ParamGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
