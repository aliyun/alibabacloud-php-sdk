<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateQualityProjectsRequest extends Model
{
    /**
     * @var int[]
     */
    public $analysisIds;

    /**
     * @var int[]
     */
    public $channelTouchType;

    /**
     * @var int
     */
    public $checkFreqType;

    /**
     * @var string[]
     */
    public $instanceList;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $timeRangeEnd;

    /**
     * @var string
     */
    public $timeRangeStart;
    protected $_name = [
        'analysisIds'      => 'AnalysisIds',
        'channelTouchType' => 'ChannelTouchType',
        'checkFreqType'    => 'CheckFreqType',
        'instanceList'     => 'InstanceList',
        'projectName'      => 'ProjectName',
        'timeRangeEnd'     => 'TimeRangeEnd',
        'timeRangeStart'   => 'TimeRangeStart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisIds) {
            $res['AnalysisIds'] = $this->analysisIds;
        }
        if (null !== $this->channelTouchType) {
            $res['ChannelTouchType'] = $this->channelTouchType;
        }
        if (null !== $this->checkFreqType) {
            $res['CheckFreqType'] = $this->checkFreqType;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->timeRangeEnd) {
            $res['TimeRangeEnd'] = $this->timeRangeEnd;
        }
        if (null !== $this->timeRangeStart) {
            $res['TimeRangeStart'] = $this->timeRangeStart;
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
        if (isset($map['AnalysisIds'])) {
            if (!empty($map['AnalysisIds'])) {
                $model->analysisIds = $map['AnalysisIds'];
            }
        }
        if (isset($map['ChannelTouchType'])) {
            if (!empty($map['ChannelTouchType'])) {
                $model->channelTouchType = $map['ChannelTouchType'];
            }
        }
        if (isset($map['CheckFreqType'])) {
            $model->checkFreqType = $map['CheckFreqType'];
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = $map['InstanceList'];
            }
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TimeRangeEnd'])) {
            $model->timeRangeEnd = $map['TimeRangeEnd'];
        }
        if (isset($map['TimeRangeStart'])) {
            $model->timeRangeStart = $map['TimeRangeStart'];
        }

        return $model;
    }
}
