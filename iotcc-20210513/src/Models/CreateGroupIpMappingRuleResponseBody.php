<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupIpMappingRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $groupIpMappingRuleId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupIpMappingRuleId' => 'GroupIpMappingRuleId',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIpMappingRuleId) {
            $res['GroupIpMappingRuleId'] = $this->groupIpMappingRuleId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupIpMappingRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupIpMappingRuleId'])) {
            $model->groupIpMappingRuleId = $map['GroupIpMappingRuleId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
