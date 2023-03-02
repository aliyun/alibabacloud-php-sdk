<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponseBody\data;

use AlibabaCloud\Tea\Model;

class influences extends Model
{
    /**
     * @description The ID of the baseline.
     *
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The name of the baseline.
     *
     * @example Baseline Name
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description The data timestamp of the baseline instance.
     *
     * @example 1553356800000
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description The margin of the baseline instance. Unit: seconds.
     *
     * @example 360
     *
     * @var int
     */
    public $buffer;

    /**
     * @description The ID of the scheduling cycle of the baseline instance. For a baseline instance that is scheduled by day, the value of this parameter is 1. For a baseline instance that is scheduled by hour, the value of this parameter ranges from 1 to 24.
     *
     * @example 1
     *
     * @var int
     */
    public $inGroupId;

    /**
     * @description The ID of the Alibaba Cloud account used by the baseline owner. Multiple IDs are separated by commas (,).
     *
     * @example 952795****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The priority of the baseline. Valid values: 1, 2, 5, 7, and 8.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the workspace to which the baseline belongs.
     *
     * @example 1234
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The status of the baseline. Valid values: ERROR, SAFE, DANGEROUS, and OVER. The value ERROR indicates that no nodes are associated with the baseline, or all nodes associated with the baseline are suspended. The value SAFE indicates that nodes finish running before the alerting time. The value DANGEROUS indicates that nodes are still running after the alerting time but before the committed time. The value OVER indicates that nodes are still running after the committed time.
     *
     * @example SAFE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'baselineId'   => 'BaselineId',
        'baselineName' => 'BaselineName',
        'bizdate'      => 'Bizdate',
        'buffer'       => 'Buffer',
        'inGroupId'    => 'InGroupId',
        'owner'        => 'Owner',
        'priority'     => 'Priority',
        'projectId'    => 'ProjectId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->buffer) {
            $res['Buffer'] = $this->buffer;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return influences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['Buffer'])) {
            $model->buffer = $map['Buffer'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
