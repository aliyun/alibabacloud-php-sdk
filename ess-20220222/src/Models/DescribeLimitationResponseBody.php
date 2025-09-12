<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribeLimitationResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxNumberOfAlbServerGroup;

    /**
     * @var int
     */
    public $maxNumberOfDBInstances;

    /**
     * @var int
     */
    public $maxNumberOfLifecycleHooks;

    /**
     * @var int
     */
    public $maxNumberOfLoadBalancers;

    /**
     * @var int
     */
    public $maxNumberOfMaxSize;

    /**
     * @var int
     */
    public $maxNumberOfMinSize;

    /**
     * @var int
     */
    public $maxNumberOfNlbServerGroup;

    /**
     * @var int
     */
    public $maxNumberOfNotificationConfigurations;

    /**
     * @var int
     */
    public $maxNumberOfScalingConfigurations;

    /**
     * @var int
     */
    public $maxNumberOfScalingGroups;

    /**
     * @var int
     */
    public $maxNumberOfScalingInstances;

    /**
     * @var int
     */
    public $maxNumberOfScalingRules;

    /**
     * @var int
     */
    public $maxNumberOfScheduledTasks;

    /**
     * @var int
     */
    public $maxNumberOfVServerGroups;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxNumberOfAlbServerGroup' => 'MaxNumberOfAlbServerGroup',
        'maxNumberOfDBInstances' => 'MaxNumberOfDBInstances',
        'maxNumberOfLifecycleHooks' => 'MaxNumberOfLifecycleHooks',
        'maxNumberOfLoadBalancers' => 'MaxNumberOfLoadBalancers',
        'maxNumberOfMaxSize' => 'MaxNumberOfMaxSize',
        'maxNumberOfMinSize' => 'MaxNumberOfMinSize',
        'maxNumberOfNlbServerGroup' => 'MaxNumberOfNlbServerGroup',
        'maxNumberOfNotificationConfigurations' => 'MaxNumberOfNotificationConfigurations',
        'maxNumberOfScalingConfigurations' => 'MaxNumberOfScalingConfigurations',
        'maxNumberOfScalingGroups' => 'MaxNumberOfScalingGroups',
        'maxNumberOfScalingInstances' => 'MaxNumberOfScalingInstances',
        'maxNumberOfScalingRules' => 'MaxNumberOfScalingRules',
        'maxNumberOfScheduledTasks' => 'MaxNumberOfScheduledTasks',
        'maxNumberOfVServerGroups' => 'MaxNumberOfVServerGroups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxNumberOfAlbServerGroup) {
            $res['MaxNumberOfAlbServerGroup'] = $this->maxNumberOfAlbServerGroup;
        }

        if (null !== $this->maxNumberOfDBInstances) {
            $res['MaxNumberOfDBInstances'] = $this->maxNumberOfDBInstances;
        }

        if (null !== $this->maxNumberOfLifecycleHooks) {
            $res['MaxNumberOfLifecycleHooks'] = $this->maxNumberOfLifecycleHooks;
        }

        if (null !== $this->maxNumberOfLoadBalancers) {
            $res['MaxNumberOfLoadBalancers'] = $this->maxNumberOfLoadBalancers;
        }

        if (null !== $this->maxNumberOfMaxSize) {
            $res['MaxNumberOfMaxSize'] = $this->maxNumberOfMaxSize;
        }

        if (null !== $this->maxNumberOfMinSize) {
            $res['MaxNumberOfMinSize'] = $this->maxNumberOfMinSize;
        }

        if (null !== $this->maxNumberOfNlbServerGroup) {
            $res['MaxNumberOfNlbServerGroup'] = $this->maxNumberOfNlbServerGroup;
        }

        if (null !== $this->maxNumberOfNotificationConfigurations) {
            $res['MaxNumberOfNotificationConfigurations'] = $this->maxNumberOfNotificationConfigurations;
        }

        if (null !== $this->maxNumberOfScalingConfigurations) {
            $res['MaxNumberOfScalingConfigurations'] = $this->maxNumberOfScalingConfigurations;
        }

        if (null !== $this->maxNumberOfScalingGroups) {
            $res['MaxNumberOfScalingGroups'] = $this->maxNumberOfScalingGroups;
        }

        if (null !== $this->maxNumberOfScalingInstances) {
            $res['MaxNumberOfScalingInstances'] = $this->maxNumberOfScalingInstances;
        }

        if (null !== $this->maxNumberOfScalingRules) {
            $res['MaxNumberOfScalingRules'] = $this->maxNumberOfScalingRules;
        }

        if (null !== $this->maxNumberOfScheduledTasks) {
            $res['MaxNumberOfScheduledTasks'] = $this->maxNumberOfScheduledTasks;
        }

        if (null !== $this->maxNumberOfVServerGroups) {
            $res['MaxNumberOfVServerGroups'] = $this->maxNumberOfVServerGroups;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxNumberOfAlbServerGroup'])) {
            $model->maxNumberOfAlbServerGroup = $map['MaxNumberOfAlbServerGroup'];
        }

        if (isset($map['MaxNumberOfDBInstances'])) {
            $model->maxNumberOfDBInstances = $map['MaxNumberOfDBInstances'];
        }

        if (isset($map['MaxNumberOfLifecycleHooks'])) {
            $model->maxNumberOfLifecycleHooks = $map['MaxNumberOfLifecycleHooks'];
        }

        if (isset($map['MaxNumberOfLoadBalancers'])) {
            $model->maxNumberOfLoadBalancers = $map['MaxNumberOfLoadBalancers'];
        }

        if (isset($map['MaxNumberOfMaxSize'])) {
            $model->maxNumberOfMaxSize = $map['MaxNumberOfMaxSize'];
        }

        if (isset($map['MaxNumberOfMinSize'])) {
            $model->maxNumberOfMinSize = $map['MaxNumberOfMinSize'];
        }

        if (isset($map['MaxNumberOfNlbServerGroup'])) {
            $model->maxNumberOfNlbServerGroup = $map['MaxNumberOfNlbServerGroup'];
        }

        if (isset($map['MaxNumberOfNotificationConfigurations'])) {
            $model->maxNumberOfNotificationConfigurations = $map['MaxNumberOfNotificationConfigurations'];
        }

        if (isset($map['MaxNumberOfScalingConfigurations'])) {
            $model->maxNumberOfScalingConfigurations = $map['MaxNumberOfScalingConfigurations'];
        }

        if (isset($map['MaxNumberOfScalingGroups'])) {
            $model->maxNumberOfScalingGroups = $map['MaxNumberOfScalingGroups'];
        }

        if (isset($map['MaxNumberOfScalingInstances'])) {
            $model->maxNumberOfScalingInstances = $map['MaxNumberOfScalingInstances'];
        }

        if (isset($map['MaxNumberOfScalingRules'])) {
            $model->maxNumberOfScalingRules = $map['MaxNumberOfScalingRules'];
        }

        if (isset($map['MaxNumberOfScheduledTasks'])) {
            $model->maxNumberOfScheduledTasks = $map['MaxNumberOfScheduledTasks'];
        }

        if (isset($map['MaxNumberOfVServerGroups'])) {
            $model->maxNumberOfVServerGroups = $map['MaxNumberOfVServerGroups'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
