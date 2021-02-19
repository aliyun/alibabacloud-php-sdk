<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class DescribeLimitationResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxNumberOfLifecycleHooks;

    /**
     * @var int
     */
    public $maxNumberOfScalingRules;

    /**
     * @var int
     */
    public $maxNumberOfScalingInstances;

    /**
     * @var int
     */
    public $maxNumberOfScheduledTasks;

    /**
     * @var int
     */
    public $maxNumberOfVServerGroups;

    /**
     * @var int
     */
    public $maxNumberOfLoadBalancers;

    /**
     * @var int
     */
    public $maxNumberOfMinSize;

    /**
     * @var int
     */
    public $maxNumberOfScalingGroups;

    /**
     * @var int
     */
    public $maxNumberOfNotificationConfigurations;

    /**
     * @var int
     */
    public $maxNumberOfMaxSize;

    /**
     * @var int
     */
    public $maxNumberOfDBInstances;

    /**
     * @var int
     */
    public $maxNumberOfScalingConfigurations;
    protected $_name = [
        'maxNumberOfLifecycleHooks'             => 'MaxNumberOfLifecycleHooks',
        'maxNumberOfScalingRules'               => 'MaxNumberOfScalingRules',
        'maxNumberOfScalingInstances'           => 'MaxNumberOfScalingInstances',
        'maxNumberOfScheduledTasks'             => 'MaxNumberOfScheduledTasks',
        'maxNumberOfVServerGroups'              => 'MaxNumberOfVServerGroups',
        'maxNumberOfLoadBalancers'              => 'MaxNumberOfLoadBalancers',
        'maxNumberOfMinSize'                    => 'MaxNumberOfMinSize',
        'maxNumberOfScalingGroups'              => 'MaxNumberOfScalingGroups',
        'maxNumberOfNotificationConfigurations' => 'MaxNumberOfNotificationConfigurations',
        'maxNumberOfMaxSize'                    => 'MaxNumberOfMaxSize',
        'maxNumberOfDBInstances'                => 'MaxNumberOfDBInstances',
        'maxNumberOfScalingConfigurations'      => 'MaxNumberOfScalingConfigurations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxNumberOfLifecycleHooks) {
            $res['MaxNumberOfLifecycleHooks'] = $this->maxNumberOfLifecycleHooks;
        }
        if (null !== $this->maxNumberOfScalingRules) {
            $res['MaxNumberOfScalingRules'] = $this->maxNumberOfScalingRules;
        }
        if (null !== $this->maxNumberOfScalingInstances) {
            $res['MaxNumberOfScalingInstances'] = $this->maxNumberOfScalingInstances;
        }
        if (null !== $this->maxNumberOfScheduledTasks) {
            $res['MaxNumberOfScheduledTasks'] = $this->maxNumberOfScheduledTasks;
        }
        if (null !== $this->maxNumberOfVServerGroups) {
            $res['MaxNumberOfVServerGroups'] = $this->maxNumberOfVServerGroups;
        }
        if (null !== $this->maxNumberOfLoadBalancers) {
            $res['MaxNumberOfLoadBalancers'] = $this->maxNumberOfLoadBalancers;
        }
        if (null !== $this->maxNumberOfMinSize) {
            $res['MaxNumberOfMinSize'] = $this->maxNumberOfMinSize;
        }
        if (null !== $this->maxNumberOfScalingGroups) {
            $res['MaxNumberOfScalingGroups'] = $this->maxNumberOfScalingGroups;
        }
        if (null !== $this->maxNumberOfNotificationConfigurations) {
            $res['MaxNumberOfNotificationConfigurations'] = $this->maxNumberOfNotificationConfigurations;
        }
        if (null !== $this->maxNumberOfMaxSize) {
            $res['MaxNumberOfMaxSize'] = $this->maxNumberOfMaxSize;
        }
        if (null !== $this->maxNumberOfDBInstances) {
            $res['MaxNumberOfDBInstances'] = $this->maxNumberOfDBInstances;
        }
        if (null !== $this->maxNumberOfScalingConfigurations) {
            $res['MaxNumberOfScalingConfigurations'] = $this->maxNumberOfScalingConfigurations;
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
        if (isset($map['MaxNumberOfLifecycleHooks'])) {
            $model->maxNumberOfLifecycleHooks = $map['MaxNumberOfLifecycleHooks'];
        }
        if (isset($map['MaxNumberOfScalingRules'])) {
            $model->maxNumberOfScalingRules = $map['MaxNumberOfScalingRules'];
        }
        if (isset($map['MaxNumberOfScalingInstances'])) {
            $model->maxNumberOfScalingInstances = $map['MaxNumberOfScalingInstances'];
        }
        if (isset($map['MaxNumberOfScheduledTasks'])) {
            $model->maxNumberOfScheduledTasks = $map['MaxNumberOfScheduledTasks'];
        }
        if (isset($map['MaxNumberOfVServerGroups'])) {
            $model->maxNumberOfVServerGroups = $map['MaxNumberOfVServerGroups'];
        }
        if (isset($map['MaxNumberOfLoadBalancers'])) {
            $model->maxNumberOfLoadBalancers = $map['MaxNumberOfLoadBalancers'];
        }
        if (isset($map['MaxNumberOfMinSize'])) {
            $model->maxNumberOfMinSize = $map['MaxNumberOfMinSize'];
        }
        if (isset($map['MaxNumberOfScalingGroups'])) {
            $model->maxNumberOfScalingGroups = $map['MaxNumberOfScalingGroups'];
        }
        if (isset($map['MaxNumberOfNotificationConfigurations'])) {
            $model->maxNumberOfNotificationConfigurations = $map['MaxNumberOfNotificationConfigurations'];
        }
        if (isset($map['MaxNumberOfMaxSize'])) {
            $model->maxNumberOfMaxSize = $map['MaxNumberOfMaxSize'];
        }
        if (isset($map['MaxNumberOfDBInstances'])) {
            $model->maxNumberOfDBInstances = $map['MaxNumberOfDBInstances'];
        }
        if (isset($map['MaxNumberOfScalingConfigurations'])) {
            $model->maxNumberOfScalingConfigurations = $map['MaxNumberOfScalingConfigurations'];
        }

        return $model;
    }
}
