<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $channelType;

    /**
     * @var int
     */
    public $judgeType;

    /**
     * @var int
     */
    public $roleConfigStatus;

    /**
     * @var ruleInfo
     */
    public $ruleInfo;

    /**
     * @var int
     */
    public $setId;
    protected $_name = [
        'channelType'      => 'ChannelType',
        'judgeType'        => 'JudgeType',
        'roleConfigStatus' => 'RoleConfigStatus',
        'ruleInfo'         => 'RuleInfo',
        'setId'            => 'SetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->judgeType) {
            $res['JudgeType'] = $this->judgeType;
        }
        if (null !== $this->roleConfigStatus) {
            $res['RoleConfigStatus'] = $this->roleConfigStatus;
        }
        if (null !== $this->ruleInfo) {
            $res['RuleInfo'] = null !== $this->ruleInfo ? $this->ruleInfo->toMap() : null;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['JudgeType'])) {
            $model->judgeType = $map['JudgeType'];
        }
        if (isset($map['RoleConfigStatus'])) {
            $model->roleConfigStatus = $map['RoleConfigStatus'];
        }
        if (isset($map['RuleInfo'])) {
            $model->ruleInfo = ruleInfo::fromMap($map['RuleInfo']);
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }

        return $model;
    }
}
