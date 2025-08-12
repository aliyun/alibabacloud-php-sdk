<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponseBody\nodeStatusList;

use AlibabaCloud\Dara\Model;

class nodeStatus extends Model
{
    /**
     * @var string
     */
    public $agentInstallErrorCode;

    /**
     * @var bool
     */
    public $autoInstall;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $osMonitorConfig;

    /**
     * @var string
     */
    public $osMonitorErrorCode;

    /**
     * @var string
     */
    public $osMonitorErrorDetail;

    /**
     * @var string
     */
    public $osMonitorStatus;

    /**
     * @var string
     */
    public $osMonitorVersion;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'agentInstallErrorCode' => 'AgentInstallErrorCode',
        'autoInstall' => 'AutoInstall',
        'instanceId' => 'InstanceId',
        'osMonitorConfig' => 'OsMonitorConfig',
        'osMonitorErrorCode' => 'OsMonitorErrorCode',
        'osMonitorErrorDetail' => 'OsMonitorErrorDetail',
        'osMonitorStatus' => 'OsMonitorStatus',
        'osMonitorVersion' => 'OsMonitorVersion',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentInstallErrorCode) {
            $res['AgentInstallErrorCode'] = $this->agentInstallErrorCode;
        }

        if (null !== $this->autoInstall) {
            $res['AutoInstall'] = $this->autoInstall;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->osMonitorConfig) {
            $res['OsMonitorConfig'] = $this->osMonitorConfig;
        }

        if (null !== $this->osMonitorErrorCode) {
            $res['OsMonitorErrorCode'] = $this->osMonitorErrorCode;
        }

        if (null !== $this->osMonitorErrorDetail) {
            $res['OsMonitorErrorDetail'] = $this->osMonitorErrorDetail;
        }

        if (null !== $this->osMonitorStatus) {
            $res['OsMonitorStatus'] = $this->osMonitorStatus;
        }

        if (null !== $this->osMonitorVersion) {
            $res['OsMonitorVersion'] = $this->osMonitorVersion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AgentInstallErrorCode'])) {
            $model->agentInstallErrorCode = $map['AgentInstallErrorCode'];
        }

        if (isset($map['AutoInstall'])) {
            $model->autoInstall = $map['AutoInstall'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OsMonitorConfig'])) {
            $model->osMonitorConfig = $map['OsMonitorConfig'];
        }

        if (isset($map['OsMonitorErrorCode'])) {
            $model->osMonitorErrorCode = $map['OsMonitorErrorCode'];
        }

        if (isset($map['OsMonitorErrorDetail'])) {
            $model->osMonitorErrorDetail = $map['OsMonitorErrorDetail'];
        }

        if (isset($map['OsMonitorStatus'])) {
            $model->osMonitorStatus = $map['OsMonitorStatus'];
        }

        if (isset($map['OsMonitorVersion'])) {
            $model->osMonitorVersion = $map['OsMonitorVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
