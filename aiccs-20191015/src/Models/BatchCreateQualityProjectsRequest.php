<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateQualityProjectsRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $checkFreqType;

    /**
     * @var string
     */
    public $timeRangeStart;

    /**
     * @var string
     */
    public $timeRangeEnd;

    /**
     * @var int[]
     */
    public $analysisIds;

    /**
     * @var string[]
     */
    public $instanceList;

    /**
     * @var int[]
     */
    public $channelTouchType;
    protected $_name = [
        'projectName'      => 'ProjectName',
        'checkFreqType'    => 'CheckFreqType',
        'timeRangeStart'   => 'TimeRangeStart',
        'timeRangeEnd'     => 'TimeRangeEnd',
        'analysisIds'      => 'AnalysisIds',
        'instanceList'     => 'InstanceList',
        'channelTouchType' => 'ChannelTouchType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->checkFreqType) {
            $res['CheckFreqType'] = $this->checkFreqType;
        }
        if (null !== $this->timeRangeStart) {
            $res['TimeRangeStart'] = $this->timeRangeStart;
        }
        if (null !== $this->timeRangeEnd) {
            $res['TimeRangeEnd'] = $this->timeRangeEnd;
        }
        if (null !== $this->analysisIds) {
            $res['AnalysisIds'] = $this->analysisIds;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }
        if (null !== $this->channelTouchType) {
            $res['ChannelTouchType'] = $this->channelTouchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateQualityProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['CheckFreqType'])) {
            $model->checkFreqType = $map['CheckFreqType'];
        }
        if (isset($map['TimeRangeStart'])) {
            $model->timeRangeStart = $map['TimeRangeStart'];
        }
        if (isset($map['TimeRangeEnd'])) {
            $model->timeRangeEnd = $map['TimeRangeEnd'];
        }
        if (isset($map['AnalysisIds'])) {
            if (!empty($map['AnalysisIds'])) {
                $model->analysisIds = $map['AnalysisIds'];
            }
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = $map['InstanceList'];
            }
        }
        if (isset($map['ChannelTouchType'])) {
            if (!empty($map['ChannelTouchType'])) {
                $model->channelTouchType = $map['ChannelTouchType'];
            }
        }

        return $model;
    }
}
