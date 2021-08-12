<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class DescribeLimitationResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxNumberOfScheduledTasks;

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
    public $maxNumberOfAlbServerGroup;

    /**
     * @var int
     */
    public $maxNumberOfDBInstances;

    /**
     * @var int
     */
    public $maxNumberOfScalingConfigurations;

    /**
     * @var int
     */
    public $maxNumberOfMinSize;

    /**
     * @var int
     */
    public $maxNumberOfLifecycleHooks;

    /**
     * @var int
     */
    public $maxNumberOfScalingInstances;

    /**
     * @var int
     */
    public $maxNumberOfScalingGroups;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxNumberOfNotificationConfigurations;

    /**
     * @var int
     */
    public $maxNumberOfVServerGroups;

    /**
     * @var int
     */
    public $maxNumberOfScalingRules;
    protected $_name = [
        'maxNumberOfScheduledTasks'             => 'MaxNumberOfScheduledTasks',
        'maxNumberOfLoadBalancers'              => 'MaxNumberOfLoadBalancers',
        'maxNumberOfMaxSize'                    => 'MaxNumberOfMaxSize',
        'maxNumberOfAlbServerGroup'             => 'MaxNumberOfAlbServerGroup',
        'maxNumberOfDBInstances'                => 'MaxNumberOfDBInstances',
        'maxNumberOfScalingConfigurations'      => 'MaxNumberOfScalingConfigurations',
        'maxNumberOfMinSize'                    => 'MaxNumberOfMinSize',
        'maxNumberOfLifecycleHooks'             => 'MaxNumberOfLifecycleHooks',
        'maxNumberOfScalingInstances'           => 'MaxNumberOfScalingInstances',
        'maxNumberOfScalingGroups'              => 'MaxNumberOfScalingGroups',
        'requestId'                             => 'RequestId',
        'maxNumberOfNotificationConfigurations' => 'MaxNumberOfNotificationConfigurations',
        'maxNumberOfVServerGroups'              => 'MaxNumberOfVServerGroups',
        'maxNumberOfScalingRules'               => 'MaxNumberOfScalingRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxNumberOfScheduledTasks) {
            $res['MaxNumberOfScheduledTasks'] = $this->maxNumberOfScheduledTasks;
        }
        if (null !== $this->maxNumberOfLoadBalancers) {
            $res['MaxNumberOfLoadBalancers'] = $this->maxNumberOfLoadBalancers;
        }
        if (null !== $this->maxNumberOfMaxSize) {
            $res['MaxNumberOfMaxSize'] = $this->maxNumberOfMaxSize;
        }
        if (null !== $this->maxNumberOfAlbServerGroup) {
            $res['MaxNumberOfAlbServerGroup'] = $this->maxNumberOfAlbServerGroup;
        }
        if (null !== $this->maxNumberOfDBInstances) {
            $res['MaxNumberOfDBInstances'] = $this->maxNumberOfDBInstances;
        }
        if (null !== $this->maxNumberOfScalingConfigurations) {
            $res['MaxNumberOfScalingConfigurations'] = $this->maxNumberOfScalingConfigurations;
        }
        if (null !== $this->maxNumberOfMinSize) {
            $res['MaxNumberOfMinSize'] = $this->maxNumberOfMinSize;
        }
        if (null !== $this->maxNumberOfLifecycleHooks) {
            $res['MaxNumberOfLifecycleHooks'] = $this->maxNumberOfLifecycleHooks;
        }
        if (null !== $this->maxNumberOfScalingInstances) {
            $res['MaxNumberOfScalingInstances'] = $this->maxNumberOfScalingInstances;
        }
        if (null !== $this->maxNumberOfScalingGroups) {
            $res['MaxNumberOfScalingGroups'] = $this->maxNumberOfScalingGroups;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxNumberOfNotificationConfigurations) {
            $res['MaxNumberOfNotificationConfigurations'] = $this->maxNumberOfNotificationConfigurations;
        }
        if (null !== $this->maxNumberOfVServerGroups) {
            $res['MaxNumberOfVServerGroups'] = $this->maxNumberOfVServerGroups;
        }
        if (null !== $this->maxNumberOfScalingRules) {
            $res['MaxNumberOfScalingRules'] = $this->maxNumberOfScalingRules;
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
        if (isset($map['MaxNumberOfScheduledTasks'])) {
            $model->maxNumberOfScheduledTasks = $map['MaxNumberOfScheduledTasks'];
        }
        if (isset($map['MaxNumberOfLoadBalancers'])) {
            $model->maxNumberOfLoadBalancers = $map['MaxNumberOfLoadBalancers'];
        }
        if (isset($map['MaxNumberOfMaxSize'])) {
            $model->maxNumberOfMaxSize = $map['MaxNumberOfMaxSize'];
        }
        if (isset($map['MaxNumberOfAlbServerGroup'])) {
            $model->maxNumberOfAlbServerGroup = $map['MaxNumberOfAlbServerGroup'];
        }
        if (isset($map['MaxNumberOfDBInstances'])) {
            $model->maxNumberOfDBInstances = $map['MaxNumberOfDBInstances'];
        }
        if (isset($map['MaxNumberOfScalingConfigurations'])) {
            $model->maxNumberOfScalingConfigurations = $map['MaxNumberOfScalingConfigurations'];
        }
        if (isset($map['MaxNumberOfMinSize'])) {
            $model->maxNumberOfMinSize = $map['MaxNumberOfMinSize'];
        }
        if (isset($map['MaxNumberOfLifecycleHooks'])) {
            $model->maxNumberOfLifecycleHooks = $map['MaxNumberOfLifecycleHooks'];
        }
        if (isset($map['MaxNumberOfScalingInstances'])) {
            $model->maxNumberOfScalingInstances = $map['MaxNumberOfScalingInstances'];
        }
        if (isset($map['MaxNumberOfScalingGroups'])) {
            $model->maxNumberOfScalingGroups = $map['MaxNumberOfScalingGroups'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxNumberOfNotificationConfigurations'])) {
            $model->maxNumberOfNotificationConfigurations = $map['MaxNumberOfNotificationConfigurations'];
        }
        if (isset($map['MaxNumberOfVServerGroups'])) {
            $model->maxNumberOfVServerGroups = $map['MaxNumberOfVServerGroups'];
        }
        if (isset($map['MaxNumberOfScalingRules'])) {
            $model->maxNumberOfScalingRules = $map['MaxNumberOfScalingRules'];
        }

        return $model;
    }
}
