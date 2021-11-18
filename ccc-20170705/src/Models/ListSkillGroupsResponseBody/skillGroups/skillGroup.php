<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsResponseBody\skillGroups;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsResponseBody\skillGroups\skillGroup\outboundPhoneNumbers;
use AlibabaCloud\Tea\Model;

class skillGroup extends Model
{
    /**
     * @var string
     */
    public $accQueueName;

    /**
     * @var string
     */
    public $accSkillGroupName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var outboundPhoneNumbers
     */
    public $outboundPhoneNumbers;

    /**
     * @var string
     */
    public $routingStrategy;

    /**
     * @var string
     */
    public $skillGroupDescription;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var int
     */
    public $userCount;
    protected $_name = [
        'accQueueName'          => 'AccQueueName',
        'accSkillGroupName'     => 'AccSkillGroupName',
        'instanceId'            => 'InstanceId',
        'outboundPhoneNumbers'  => 'OutboundPhoneNumbers',
        'routingStrategy'       => 'RoutingStrategy',
        'skillGroupDescription' => 'SkillGroupDescription',
        'skillGroupId'          => 'SkillGroupId',
        'skillGroupName'        => 'SkillGroupName',
        'userCount'             => 'UserCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accQueueName) {
            $res['AccQueueName'] = $this->accQueueName;
        }
        if (null !== $this->accSkillGroupName) {
            $res['AccSkillGroupName'] = $this->accSkillGroupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->outboundPhoneNumbers) {
            $res['OutboundPhoneNumbers'] = null !== $this->outboundPhoneNumbers ? $this->outboundPhoneNumbers->toMap() : null;
        }
        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }
        if (null !== $this->skillGroupDescription) {
            $res['SkillGroupDescription'] = $this->skillGroupDescription;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccQueueName'])) {
            $model->accQueueName = $map['AccQueueName'];
        }
        if (isset($map['AccSkillGroupName'])) {
            $model->accSkillGroupName = $map['AccSkillGroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OutboundPhoneNumbers'])) {
            $model->outboundPhoneNumbers = outboundPhoneNumbers::fromMap($map['OutboundPhoneNumbers']);
        }
        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }
        if (isset($map['SkillGroupDescription'])) {
            $model->skillGroupDescription = $map['SkillGroupDescription'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        return $model;
    }
}
