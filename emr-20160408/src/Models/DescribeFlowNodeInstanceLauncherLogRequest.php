<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowNodeInstanceLauncherLogRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $lines;

    /**
     * @var string
     */
    public $nodeInstanceId;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $reverse;

    /**
     * @var int
     */
    public $start;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'        => 'EndTime',
        'length'         => 'Length',
        'lines'          => 'Lines',
        'nodeInstanceId' => 'NodeInstanceId',
        'offset'         => 'Offset',
        'projectId'      => 'ProjectId',
        'regionId'       => 'RegionId',
        'reverse'        => 'Reverse',
        'start'          => 'Start',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }
        if (null !== $this->nodeInstanceId) {
            $res['NodeInstanceId'] = $this->nodeInstanceId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowNodeInstanceLauncherLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
        }
        if (isset($map['NodeInstanceId'])) {
            $model->nodeInstanceId = $map['NodeInstanceId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
