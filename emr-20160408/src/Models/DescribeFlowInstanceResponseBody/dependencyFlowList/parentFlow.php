<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponseBody\dependencyFlowList;

use AlibabaCloud\Tea\Model;

class parentFlow extends Model
{
    /**
     * @var int
     */
    public $bizDate;

    /**
     * @var string
     */
    public $dependencyFlowId;

    /**
     * @var string
     */
    public $dependencyInstanceId;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowInstanceId;

    /**
     * @var bool
     */
    public $meet;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $scheduleKey;
    protected $_name = [
        'bizDate'              => 'BizDate',
        'dependencyFlowId'     => 'DependencyFlowId',
        'dependencyInstanceId' => 'DependencyInstanceId',
        'flowId'               => 'FlowId',
        'flowInstanceId'       => 'FlowInstanceId',
        'meet'                 => 'Meet',
        'projectId'            => 'ProjectId',
        'scheduleKey'          => 'ScheduleKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->dependencyFlowId) {
            $res['DependencyFlowId'] = $this->dependencyFlowId;
        }
        if (null !== $this->dependencyInstanceId) {
            $res['DependencyInstanceId'] = $this->dependencyInstanceId;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowInstanceId) {
            $res['FlowInstanceId'] = $this->flowInstanceId;
        }
        if (null !== $this->meet) {
            $res['Meet'] = $this->meet;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->scheduleKey) {
            $res['ScheduleKey'] = $this->scheduleKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parentFlow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['DependencyFlowId'])) {
            $model->dependencyFlowId = $map['DependencyFlowId'];
        }
        if (isset($map['DependencyInstanceId'])) {
            $model->dependencyInstanceId = $map['DependencyInstanceId'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowInstanceId'])) {
            $model->flowInstanceId = $map['FlowInstanceId'];
        }
        if (isset($map['Meet'])) {
            $model->meet = $map['Meet'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ScheduleKey'])) {
            $model->scheduleKey = $map['ScheduleKey'];
        }

        return $model;
    }
}
