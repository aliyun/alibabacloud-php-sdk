<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifyParameterGroupResponseBody extends Model
{
    /**
     * @description The parameter template ID.
     *
     * @example testGroupName
     *
     * @var string
     */
    public $paramGroupId;

    /**
     * @description The request ID.
     *
     * @example AD425AD3-CC7B-4EE2-A5CB-2F61BA73****
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
     * @return ModifyParameterGroupResponseBody
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
