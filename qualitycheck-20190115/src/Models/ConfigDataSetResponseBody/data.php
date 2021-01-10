<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConfigDataSetResponseBody\data\ruleInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var ruleInfo
     */
    public $ruleInfo;

    /**
     * @var int
     */
    public $channelType;

    /**
     * @var int
     */
    public $setId;

    /**
     * @var int
     */
    public $roleConfigStatus;

    /**
     * @var int
     */
    public $judgeType;
    protected $_name = [
        'ruleInfo'         => 'RuleInfo',
        'channelType'      => 'ChannelType',
        'setId'            => 'SetId',
        'roleConfigStatus' => 'RoleConfigStatus',
        'judgeType'        => 'JudgeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleInfo) {
            $res['RuleInfo'] = null !== $this->ruleInfo ? $this->ruleInfo->toMap() : null;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->roleConfigStatus) {
            $res['RoleConfigStatus'] = $this->roleConfigStatus;
        }
        if (null !== $this->judgeType) {
            $res['JudgeType'] = $this->judgeType;
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
        if (isset($map['RuleInfo'])) {
            $model->ruleInfo = ruleInfo::fromMap($map['RuleInfo']);
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['RoleConfigStatus'])) {
            $model->roleConfigStatus = $map['RoleConfigStatus'];
        }
        if (isset($map['JudgeType'])) {
            $model->judgeType = $map['JudgeType'];
        }

        return $model;
    }
}
