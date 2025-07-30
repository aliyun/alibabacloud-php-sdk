<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class ApplyWsTokenRequest extends Model
{
    /**
     * @example 123456
     *
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @example {
     * "business": "test",
     * "callType": 1,
     * "callee": "13111111111",
     * "caller": "13800000000",
     * "skillGroupId": 1,
     * "skillGroupName": "test",
     * "taskConfigId": 399,
     * "tid": "2025012412cb129e-1579-46b5-9326-1b2ececf8f30"
     * }
     *
     * @var string
     */
    public $jsonStr;
    protected $_name = [
        'baseMeAgentId' => 'BaseMeAgentId',
        'jsonStr' => 'JsonStr',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }
        if (null !== $this->jsonStr) {
            $res['JsonStr'] = $this->jsonStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyWsTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }
        if (isset($map['JsonStr'])) {
            $model->jsonStr = $map['JsonStr'];
        }

        return $model;
    }
}
