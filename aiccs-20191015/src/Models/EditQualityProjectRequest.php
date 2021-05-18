<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class EditQualityProjectRequest extends Model
{
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
    public $checkFreqType;

    /**
     * @var int
     */
    public $projectVersion;

    /**
     * @var int
     */
    public $scopeType;

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
     * @var int[]
     */
    public $depList;

    /**
     * @var int[]
     */
    public $groupList;

    /**
     * @var string[]
     */
    public $servicerList;

    /**
     * @var int[]
     */
    public $channelTouchType;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'projectId'        => 'ProjectId',
        'projectName'      => 'ProjectName',
        'checkFreqType'    => 'CheckFreqType',
        'projectVersion'   => 'ProjectVersion',
        'scopeType'        => 'ScopeType',
        'timeRangeStart'   => 'TimeRangeStart',
        'timeRangeEnd'     => 'TimeRangeEnd',
        'analysisIds'      => 'AnalysisIds',
        'depList'          => 'DepList',
        'groupList'        => 'GroupList',
        'servicerList'     => 'ServicerList',
        'channelTouchType' => 'ChannelTouchType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->checkFreqType) {
            $res['CheckFreqType'] = $this->checkFreqType;
        }
        if (null !== $this->projectVersion) {
            $res['ProjectVersion'] = $this->projectVersion;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
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
        if (null !== $this->depList) {
            $res['DepList'] = $this->depList;
        }
        if (null !== $this->groupList) {
            $res['GroupList'] = $this->groupList;
        }
        if (null !== $this->servicerList) {
            $res['ServicerList'] = $this->servicerList;
        }
        if (null !== $this->channelTouchType) {
            $res['ChannelTouchType'] = $this->channelTouchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditQualityProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['CheckFreqType'])) {
            $model->checkFreqType = $map['CheckFreqType'];
        }
        if (isset($map['ProjectVersion'])) {
            $model->projectVersion = $map['ProjectVersion'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
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
        if (isset($map['DepList'])) {
            if (!empty($map['DepList'])) {
                $model->depList = $map['DepList'];
            }
        }
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = $map['GroupList'];
            }
        }
        if (isset($map['ServicerList'])) {
            if (!empty($map['ServicerList'])) {
                $model->servicerList = $map['ServicerList'];
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
