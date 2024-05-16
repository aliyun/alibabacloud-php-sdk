<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeLimitationResponseBody extends Model
{
    /**
     * @description The maximum number of Application Load Balancer (ALB) server groups that can be attached to a scaling group.
     *
     * >  To view the server group quota or request a quota increase, go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas).
     * @example 30
     *
     * @var int
     */
    public $maxNumberOfAlbServerGroup;

    /**
     * @description The maximum number of ApsaraDB RDS instances that can be attached to a scaling group.
     *
     * >  To view the database quota or request a quota increase, go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas).
     * @example 30
     *
     * @var int
     */
    public $maxNumberOfDBInstances;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxNumberOfLifecycleHooks;

    /**
     * @example 30
     *
     * @var int
     */
    public $maxNumberOfLoadBalancers;

    /**
     * @example 2000
     *
     * @var int
     */
    public $maxNumberOfMaxSize;

    /**
     * @description The minimum number of instances that must be contained in a scaling group. The value of `MaxNumberOfMinSize` must be consistent with the value of `MaxNumberOfMaxSize`.
     *
     * @example 2000
     *
     * @var int
     */
    public $maxNumberOfMinSize;

    /**
     * @example 30
     *
     * @var int
     */
    public $maxNumberOfNlbServerGroup;

    /**
     * @example 6
     *
     * @var int
     */
    public $maxNumberOfNotificationConfigurations;

    /**
     * @description The maximum number of scaling configurations that can be created in a scaling group.
     *
     * >  To view the scaling configuration quota or request a quota increase, go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas).
     * @example 70
     *
     * @var int
     */
    public $maxNumberOfScalingConfigurations;

    /**
     * @description The maximum number of scaling groups that can be created in a region by using an Alibaba Cloud account.
     *
     * >  To view the scaling group quota or request a quota increase, go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas).
     * @example 200
     *
     * @var int
     */
    public $maxNumberOfScalingGroups;

    /**
     * @example 500
     *
     * @var int
     */
    public $maxNumberOfScalingInstances;

    /**
     * @description The maximum number of scaling rules that can be created in a scaling group.
     *
     * >  To view the scaling rule quota or request a quota increase, go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas).
     * @example 70
     *
     * @var int
     */
    public $maxNumberOfScalingRules;

    /**
     * @example 70
     *
     * @var int
     */
    public $maxNumberOfScheduledTasks;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxNumberOfVServerGroups;

    /**
     * @example BE9BEB41-E7B8-4C7D-A3CF-2DCB1066****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxNumberOfAlbServerGroup'             => 'MaxNumberOfAlbServerGroup',
        'maxNumberOfDBInstances'                => 'MaxNumberOfDBInstances',
        'maxNumberOfLifecycleHooks'             => 'MaxNumberOfLifecycleHooks',
        'maxNumberOfLoadBalancers'              => 'MaxNumberOfLoadBalancers',
        'maxNumberOfMaxSize'                    => 'MaxNumberOfMaxSize',
        'maxNumberOfMinSize'                    => 'MaxNumberOfMinSize',
        'maxNumberOfNlbServerGroup'             => 'MaxNumberOfNlbServerGroup',
        'maxNumberOfNotificationConfigurations' => 'MaxNumberOfNotificationConfigurations',
        'maxNumberOfScalingConfigurations'      => 'MaxNumberOfScalingConfigurations',
        'maxNumberOfScalingGroups'              => 'MaxNumberOfScalingGroups',
        'maxNumberOfScalingInstances'           => 'MaxNumberOfScalingInstances',
        'maxNumberOfScalingRules'               => 'MaxNumberOfScalingRules',
        'maxNumberOfScheduledTasks'             => 'MaxNumberOfScheduledTasks',
        'maxNumberOfVServerGroups'              => 'MaxNumberOfVServerGroups',
        'requestId'                             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeLimitationResponseBody
     */
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
