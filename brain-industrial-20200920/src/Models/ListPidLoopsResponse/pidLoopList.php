<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidLoopsResponse;

use AlibabaCloud\Tea\Model;

class pidLoopList extends Model
{
    /**
     * @var string
     */
    public $pidLoopId;

    /**
     * @var string
     */
    public $pidLoopName;

    /**
     * @var bool
     */
    public $crucial;

    /**
     * @var string
     */
    public $pidPublishStatus;

    /**
     * @var string
     */
    public $parameterTunningId;

    /**
     * @var string
     */
    public $pidLoopDcsType;

    /**
     * @var string
     */
    public $pidLoopType;

    /**
     * @var string
     */
    public $pidLoopProgress;

    /**
     * @var string
     */
    public $pidLoopReportProgress;

    /**
     * @var string
     */
    public $pidLoopDataProgress;

    /**
     * @var string[]
     */
    public $parameterTunningIdList;
    protected $_name = [
        'pidLoopId'              => 'PidLoopId',
        'pidLoopName'            => 'PidLoopName',
        'crucial'                => 'Crucial',
        'pidPublishStatus'       => 'PidPublishStatus',
        'parameterTunningId'     => 'ParameterTunningId',
        'pidLoopDcsType'         => 'PidLoopDcsType',
        'pidLoopType'            => 'PidLoopType',
        'pidLoopProgress'        => 'PidLoopProgress',
        'pidLoopReportProgress'  => 'PidLoopReportProgress',
        'pidLoopDataProgress'    => 'PidLoopDataProgress',
        'parameterTunningIdList' => 'ParameterTunningIdList',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
        Model::validateRequired('pidLoopName', $this->pidLoopName, true);
        Model::validateRequired('crucial', $this->crucial, true);
        Model::validateRequired('pidPublishStatus', $this->pidPublishStatus, true);
        Model::validateRequired('parameterTunningId', $this->parameterTunningId, true);
        Model::validateRequired('pidLoopDcsType', $this->pidLoopDcsType, true);
        Model::validateRequired('pidLoopType', $this->pidLoopType, true);
        Model::validateRequired('pidLoopProgress', $this->pidLoopProgress, true);
        Model::validateRequired('pidLoopReportProgress', $this->pidLoopReportProgress, true);
        Model::validateRequired('pidLoopDataProgress', $this->pidLoopDataProgress, true);
        Model::validateRequired('parameterTunningIdList', $this->parameterTunningIdList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }
        if (null !== $this->pidLoopName) {
            $res['PidLoopName'] = $this->pidLoopName;
        }
        if (null !== $this->crucial) {
            $res['Crucial'] = $this->crucial;
        }
        if (null !== $this->pidPublishStatus) {
            $res['PidPublishStatus'] = $this->pidPublishStatus;
        }
        if (null !== $this->parameterTunningId) {
            $res['ParameterTunningId'] = $this->parameterTunningId;
        }
        if (null !== $this->pidLoopDcsType) {
            $res['PidLoopDcsType'] = $this->pidLoopDcsType;
        }
        if (null !== $this->pidLoopType) {
            $res['PidLoopType'] = $this->pidLoopType;
        }
        if (null !== $this->pidLoopProgress) {
            $res['PidLoopProgress'] = $this->pidLoopProgress;
        }
        if (null !== $this->pidLoopReportProgress) {
            $res['PidLoopReportProgress'] = $this->pidLoopReportProgress;
        }
        if (null !== $this->pidLoopDataProgress) {
            $res['PidLoopDataProgress'] = $this->pidLoopDataProgress;
        }
        if (null !== $this->parameterTunningIdList) {
            $res['ParameterTunningIdList'] = $this->parameterTunningIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pidLoopList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }
        if (isset($map['PidLoopName'])) {
            $model->pidLoopName = $map['PidLoopName'];
        }
        if (isset($map['Crucial'])) {
            $model->crucial = $map['Crucial'];
        }
        if (isset($map['PidPublishStatus'])) {
            $model->pidPublishStatus = $map['PidPublishStatus'];
        }
        if (isset($map['ParameterTunningId'])) {
            $model->parameterTunningId = $map['ParameterTunningId'];
        }
        if (isset($map['PidLoopDcsType'])) {
            $model->pidLoopDcsType = $map['PidLoopDcsType'];
        }
        if (isset($map['PidLoopType'])) {
            $model->pidLoopType = $map['PidLoopType'];
        }
        if (isset($map['PidLoopProgress'])) {
            $model->pidLoopProgress = $map['PidLoopProgress'];
        }
        if (isset($map['PidLoopReportProgress'])) {
            $model->pidLoopReportProgress = $map['PidLoopReportProgress'];
        }
        if (isset($map['PidLoopDataProgress'])) {
            $model->pidLoopDataProgress = $map['PidLoopDataProgress'];
        }
        if (isset($map['ParameterTunningIdList'])) {
            if (!empty($map['ParameterTunningIdList'])) {
                $model->parameterTunningIdList = $map['ParameterTunningIdList'];
            }
        }

        return $model;
    }
}
