<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListTransferableSkillGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class skillGroups extends Model
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
     * @var bool
     */
    public $allowPrivateOutboundNumber;

    /**
     * @var string
     */
    public $instanceId;

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
        'accQueueName'               => 'AccQueueName',
        'accSkillGroupName'          => 'AccSkillGroupName',
        'allowPrivateOutboundNumber' => 'AllowPrivateOutboundNumber',
        'instanceId'                 => 'InstanceId',
        'routingStrategy'            => 'RoutingStrategy',
        'skillGroupDescription'      => 'SkillGroupDescription',
        'skillGroupId'               => 'SkillGroupId',
        'skillGroupName'             => 'SkillGroupName',
        'userCount'                  => 'UserCount',
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
        if (null !== $this->allowPrivateOutboundNumber) {
            $res['AllowPrivateOutboundNumber'] = $this->allowPrivateOutboundNumber;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return skillGroups
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
        if (isset($map['AllowPrivateOutboundNumber'])) {
            $model->allowPrivateOutboundNumber = $map['AllowPrivateOutboundNumber'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
