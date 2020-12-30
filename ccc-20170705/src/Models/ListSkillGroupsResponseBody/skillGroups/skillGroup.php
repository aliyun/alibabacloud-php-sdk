<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsResponseBody\skillGroups;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsResponseBody\skillGroups\skillGroup\outboundPhoneNumbers;
use AlibabaCloud\Tea\Model;

class skillGroup extends Model
{
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
    public $skillGroupId;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $instanceId;

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
    public $skillGroupDescription;
    protected $_name = [
        'outboundPhoneNumbers'  => 'OutboundPhoneNumbers',
        'routingStrategy'       => 'RoutingStrategy',
        'skillGroupId'          => 'SkillGroupId',
        'skillGroupName'        => 'SkillGroupName',
        'userCount'             => 'UserCount',
        'instanceId'            => 'InstanceId',
        'accQueueName'          => 'AccQueueName',
        'accSkillGroupName'     => 'AccSkillGroupName',
        'skillGroupDescription' => 'SkillGroupDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outboundPhoneNumbers) {
            $res['OutboundPhoneNumbers'] = null !== $this->outboundPhoneNumbers ? $this->outboundPhoneNumbers->toMap() : null;
        }
        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->accQueueName) {
            $res['AccQueueName'] = $this->accQueueName;
        }
        if (null !== $this->accSkillGroupName) {
            $res['AccSkillGroupName'] = $this->accSkillGroupName;
        }
        if (null !== $this->skillGroupDescription) {
            $res['SkillGroupDescription'] = $this->skillGroupDescription;
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
        if (isset($map['OutboundPhoneNumbers'])) {
            $model->outboundPhoneNumbers = outboundPhoneNumbers::fromMap($map['OutboundPhoneNumbers']);
        }
        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AccQueueName'])) {
            $model->accQueueName = $map['AccQueueName'];
        }
        if (isset($map['AccSkillGroupName'])) {
            $model->accSkillGroupName = $map['AccSkillGroupName'];
        }
        if (isset($map['SkillGroupDescription'])) {
            $model->skillGroupDescription = $map['SkillGroupDescription'];
        }

        return $model;
    }
}
