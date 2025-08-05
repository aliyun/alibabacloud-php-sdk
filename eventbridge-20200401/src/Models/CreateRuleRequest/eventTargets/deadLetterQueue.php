<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateRuleRequest\eventTargets;

use AlibabaCloud\Tea\Model;

class deadLetterQueue extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the dead-letter queue. Events that are not processed or whose maximum number of retries is exceeded are written to the dead-letter queue. Queues in SMQ and ApsaraMQ for RocketMQ can be used as dead-letter queues.
     *
     * @example acs:mns:cn-hangzhou:123456789098****:/queues/rule-deadletterqueue
     *
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'arn' => 'Arn',
        'network' => 'Network',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deadLetterQueue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
