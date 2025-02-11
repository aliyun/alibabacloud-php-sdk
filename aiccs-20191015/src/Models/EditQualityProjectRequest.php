<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class EditQualityProjectRequest extends Model
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
     * @var int[]
     */
    public $depList;
    /**
     * @var int[]
     */
    public $groupList;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $projectName;
    /**
     * @var int
     */
    public $projectVersion;
    /**
     * @var int
     */
    public $scopeType;
    /**
     * @var string[]
     */
    public $servicerList;
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
        'depList'          => 'DepList',
        'groupList'        => 'GroupList',
        'instanceId'       => 'InstanceId',
        'projectId'        => 'ProjectId',
        'projectName'      => 'ProjectName',
        'projectVersion'   => 'ProjectVersion',
        'scopeType'        => 'ScopeType',
        'servicerList'     => 'ServicerList',
        'timeRangeEnd'     => 'TimeRangeEnd',
        'timeRangeStart'   => 'TimeRangeStart',
    ];

    public function validate()
    {
        if (\is_array($this->analysisIds)) {
            Model::validateArray($this->analysisIds);
        }
        if (\is_array($this->channelTouchType)) {
            Model::validateArray($this->channelTouchType);
        }
        if (\is_array($this->depList)) {
            Model::validateArray($this->depList);
        }
        if (\is_array($this->groupList)) {
            Model::validateArray($this->groupList);
        }
        if (\is_array($this->servicerList)) {
            Model::validateArray($this->servicerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisIds) {
            if (\is_array($this->analysisIds)) {
                $res['AnalysisIds'] = [];
                $n1                 = 0;
                foreach ($this->analysisIds as $item1) {
                    $res['AnalysisIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->channelTouchType) {
            if (\is_array($this->channelTouchType)) {
                $res['ChannelTouchType'] = [];
                $n1                      = 0;
                foreach ($this->channelTouchType as $item1) {
                    $res['ChannelTouchType'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->checkFreqType) {
            $res['CheckFreqType'] = $this->checkFreqType;
        }

        if (null !== $this->depList) {
            if (\is_array($this->depList)) {
                $res['DepList'] = [];
                $n1             = 0;
                foreach ($this->depList as $item1) {
                    $res['DepList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->groupList) {
            if (\is_array($this->groupList)) {
                $res['GroupList'] = [];
                $n1               = 0;
                foreach ($this->groupList as $item1) {
                    $res['GroupList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->projectVersion) {
            $res['ProjectVersion'] = $this->projectVersion;
        }

        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        if (null !== $this->servicerList) {
            if (\is_array($this->servicerList)) {
                $res['ServicerList'] = [];
                $n1                  = 0;
                foreach ($this->servicerList as $item1) {
                    $res['ServicerList'][$n1++] = $item1;
                }
            }
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
                $n1                 = 0;
                foreach ($map['AnalysisIds'] as $item1) {
                    $model->analysisIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ChannelTouchType'])) {
            if (!empty($map['ChannelTouchType'])) {
                $model->channelTouchType = [];
                $n1                      = 0;
                foreach ($map['ChannelTouchType'] as $item1) {
                    $model->channelTouchType[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CheckFreqType'])) {
            $model->checkFreqType = $map['CheckFreqType'];
        }

        if (isset($map['DepList'])) {
            if (!empty($map['DepList'])) {
                $model->depList = [];
                $n1             = 0;
                foreach ($map['DepList'] as $item1) {
                    $model->depList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n1               = 0;
                foreach ($map['GroupList'] as $item1) {
                    $model->groupList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['ProjectVersion'])) {
            $model->projectVersion = $map['ProjectVersion'];
        }

        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        if (isset($map['ServicerList'])) {
            if (!empty($map['ServicerList'])) {
                $model->servicerList = [];
                $n1                  = 0;
                foreach ($map['ServicerList'] as $item1) {
                    $model->servicerList[$n1++] = $item1;
                }
            }
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
