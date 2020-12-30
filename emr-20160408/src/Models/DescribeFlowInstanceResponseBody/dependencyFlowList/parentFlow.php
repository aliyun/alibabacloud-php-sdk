<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowInstanceResponseBody\dependencyFlowList;

use AlibabaCloud\Tea\Model;

class parentFlow extends Model
{
    /**
     * @var string
     */
    public $scheduleKey;

    /**
     * @var int
     */
    public $bizDate;

    /**
     * @var string
     */
    public $dependencyInstanceId;

    /**
     * @var string
     */
    public $dependencyFlowId;

    /**
     * @var bool
     */
    public $meet;

    /**
     * @var string
     */
    public $flowInstanceId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $flowId;
    protected $_name = [
        'scheduleKey'          => 'ScheduleKey',
        'bizDate'              => 'BizDate',
        'dependencyInstanceId' => 'DependencyInstanceId',
        'dependencyFlowId'     => 'DependencyFlowId',
        'meet'                 => 'Meet',
        'flowInstanceId'       => 'FlowInstanceId',
        'projectId'            => 'ProjectId',
        'flowId'               => 'FlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduleKey) {
            $res['ScheduleKey'] = $this->scheduleKey;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->dependencyInstanceId) {
            $res['DependencyInstanceId'] = $this->dependencyInstanceId;
        }
        if (null !== $this->dependencyFlowId) {
            $res['DependencyFlowId'] = $this->dependencyFlowId;
        }
        if (null !== $this->meet) {
            $res['Meet'] = $this->meet;
        }
        if (null !== $this->flowInstanceId) {
            $res['FlowInstanceId'] = $this->flowInstanceId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
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
        if (isset($map['ScheduleKey'])) {
            $model->scheduleKey = $map['ScheduleKey'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['DependencyInstanceId'])) {
            $model->dependencyInstanceId = $map['DependencyInstanceId'];
        }
        if (isset($map['DependencyFlowId'])) {
            $model->dependencyFlowId = $map['DependencyFlowId'];
        }
        if (isset($map['Meet'])) {
            $model->meet = $map['Meet'];
        }
        if (isset($map['FlowInstanceId'])) {
            $model->flowInstanceId = $map['FlowInstanceId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
