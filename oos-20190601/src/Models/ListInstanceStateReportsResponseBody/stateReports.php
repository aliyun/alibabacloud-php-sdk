<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListInstanceStateReportsResponseBody;

use AlibabaCloud\Tea\Model;

class stateReports extends Model
{
    /**
     * @var string
     */
    public $reportStatus;

    /**
     * @var string
     */
    public $reportInfo;

    /**
     * @var string
     */
    public $successApplyTime;

    /**
     * @var string
     */
    public $stateConfigurationId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $reportTime;
    protected $_name = [
        'reportStatus'         => 'ReportStatus',
        'reportInfo'           => 'ReportInfo',
        'successApplyTime'     => 'SuccessApplyTime',
        'stateConfigurationId' => 'StateConfigurationId',
        'instanceId'           => 'InstanceId',
        'mode'                 => 'Mode',
        'reportTime'           => 'ReportTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }
        if (null !== $this->reportInfo) {
            $res['ReportInfo'] = $this->reportInfo;
        }
        if (null !== $this->successApplyTime) {
            $res['SuccessApplyTime'] = $this->successApplyTime;
        }
        if (null !== $this->stateConfigurationId) {
            $res['StateConfigurationId'] = $this->stateConfigurationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stateReports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }
        if (isset($map['ReportInfo'])) {
            $model->reportInfo = $map['ReportInfo'];
        }
        if (isset($map['SuccessApplyTime'])) {
            $model->successApplyTime = $map['SuccessApplyTime'];
        }
        if (isset($map['StateConfigurationId'])) {
            $model->stateConfigurationId = $map['StateConfigurationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }

        return $model;
    }
}
