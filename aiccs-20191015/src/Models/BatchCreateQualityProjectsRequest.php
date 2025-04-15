<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

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
        'analysisIds' => 'AnalysisIds',
        'channelTouchType' => 'ChannelTouchType',
        'checkFreqType' => 'CheckFreqType',
        'instanceList' => 'InstanceList',
        'projectName' => 'ProjectName',
        'timeRangeEnd' => 'TimeRangeEnd',
        'timeRangeStart' => 'TimeRangeStart',
    ];

    public function validate()
    {
        if (\is_array($this->analysisIds)) {
            Model::validateArray($this->analysisIds);
        }
        if (\is_array($this->channelTouchType)) {
            Model::validateArray($this->channelTouchType);
        }
        if (\is_array($this->instanceList)) {
            Model::validateArray($this->instanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisIds) {
            if (\is_array($this->analysisIds)) {
                $res['AnalysisIds'] = [];
                $n1 = 0;
                foreach ($this->analysisIds as $item1) {
                    $res['AnalysisIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->channelTouchType) {
            if (\is_array($this->channelTouchType)) {
                $res['ChannelTouchType'] = [];
                $n1 = 0;
                foreach ($this->channelTouchType as $item1) {
                    $res['ChannelTouchType'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->checkFreqType) {
            $res['CheckFreqType'] = $this->checkFreqType;
        }

        if (null !== $this->instanceList) {
            if (\is_array($this->instanceList)) {
                $res['InstanceList'] = [];
                $n1 = 0;
                foreach ($this->instanceList as $item1) {
                    $res['InstanceList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisIds'])) {
            if (!empty($map['AnalysisIds'])) {
                $model->analysisIds = [];
                $n1 = 0;
                foreach ($map['AnalysisIds'] as $item1) {
                    $model->analysisIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ChannelTouchType'])) {
            if (!empty($map['ChannelTouchType'])) {
                $model->channelTouchType = [];
                $n1 = 0;
                foreach ($map['ChannelTouchType'] as $item1) {
                    $model->channelTouchType[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CheckFreqType'])) {
            $model->checkFreqType = $map['CheckFreqType'];
        }

        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = [];
                $n1 = 0;
                foreach ($map['InstanceList'] as $item1) {
                    $model->instanceList[$n1++] = $item1;
                }
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
