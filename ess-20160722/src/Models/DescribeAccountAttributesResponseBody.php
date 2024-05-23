<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountAttributesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxNumberOfDBInstances;

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
    protected $_name = [
        'maxNumberOfDBInstances'           => 'MaxNumberOfDBInstances',
        'maxNumberOfLoadBalancers'         => 'MaxNumberOfLoadBalancers',
        'maxNumberOfMaxSize'               => 'MaxNumberOfMaxSize',
        'maxNumberOfMinSize'               => 'MaxNumberOfMinSize',
        'maxNumberOfScalingConfigurations' => 'MaxNumberOfScalingConfigurations',
        'maxNumberOfScalingGroups'         => 'MaxNumberOfScalingGroups',
        'maxNumberOfScalingInstances'      => 'MaxNumberOfScalingInstances',
        'maxNumberOfScalingRules'          => 'MaxNumberOfScalingRules',
        'maxNumberOfScheduledTasks'        => 'MaxNumberOfScheduledTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxNumberOfDBInstances) {
            $res['MaxNumberOfDBInstances'] = $this->maxNumberOfDBInstances;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxNumberOfDBInstances'])) {
            $model->maxNumberOfDBInstances = $map['MaxNumberOfDBInstances'];
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

        return $model;
    }
}
