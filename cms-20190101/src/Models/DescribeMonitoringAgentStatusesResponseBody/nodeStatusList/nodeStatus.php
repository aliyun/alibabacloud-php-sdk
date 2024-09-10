<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponseBody\nodeStatusList;

use AlibabaCloud\Tea\Model;

class nodeStatus extends Model
{
    /**
     * @description The error code returned when the CloudMonitor agent is installed. Valid values:
     *
     *   Common.Timeout: The installation timed out.
     *   Common.SLR: The service-linked role for CloudMonitor is unauthorized.
     *   Common.OS: The operating system is not supported.
     *   Assist.Invalid: Cloud Assistant is not running.
     *   Assist.Invoke: An error occurred when the installation program is started.
     *   Assist.Execute: An error occurred when the installation program is running.
     *
     * @var string
     */
    public $agentInstallErrorCode;

    /**
     * @description Indicates whether the CloudMonitor agent is automatically installed. Valid values:
     *
     *   true: The CloudMonitor agent is automatically installed.
     *   false: The CloudMonitor agent is not automatically installed.
     *
     * @example true
     *
     * @var bool
     */
    public $autoInstall;

    /**
     * @description The instance ID.
     *
     * @example i-hp3dunahluwajv6f****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the SysAK monitoring feature is enabled.`` Valid values:
     *
     *   `true`: The SysAK monitoring feature is enabled.
     *   `false`: the SysAK monitoring feature is disabled.
     *
     * @example {"sysak":true}
     *
     * @var string
     */
    public $osMonitorConfig;

    /**
     * @description The error status of SysOM. Valid values:
     *
     *   `install_fail`: SysOM fails to be installed or an unknown error occurs.
     *   `install_assist_invalid`: SysOM fails to be installed because the status of Cloud Assistant is invalid.
     *   `install_assist_command_fail`: SysOM fails to be installed because the installation command fails to run.
     *   `uninstall_fail`: SysOM fails to be uninstalled or an unknown error occurs.
     *   `uninstall_assist_invalid`: SysOM fails to be uninstalled because the status of Cloud Assistant is invalid.
     *   `uninstall_assist_command_fail`: SysOM fails to be uninstalled because the uninstallation command fails to run.
     *
     * @example install_fail
     *
     * @var string
     */
    public $osMonitorErrorCode;

    /**
     * @description The details of the execution error. Valid values:
     *
     *   `Command.ErrorCode.Fail.Downlaod.REGIN_ID`: Failed to obtain the region ID.
     *   `Command.ErrorCode.Fail.Downlaod.SYSAK`: Failed to download the .rpm package of System Analyse Kit (SysAK).
     *   `Command.ErrorCode.Fail.Downlaod.CMON_FILE`: Failed to download the CMON file.
     *   `Command.ErrorCode.Fail.Downlaod.BTF`: Failed to start SysAK because the BTF file is not found.
     *   `Command.ErrorCode.Fail.Start.SYSAK`: Failed to start SysAK due to an unknown error.
     *
     * @example Command.ErrorCode.Fail.Downlaod.REGIN_ID
     *
     * @var string
     */
    public $osMonitorErrorDetail;

    /**
     * @description The status of SysOM. Valid values:
     *
     *   installing: SysOM is being installed.
     *   running: SysOM is running.
     *   stopped: SysOM is stopped.
     *   uninstalling: SysOM is being uninstalled.
     *
     * @example running
     *
     * @var string
     */
    public $osMonitorStatus;

    /**
     * @description The SysOM version.
     *
     * @example 1.3.0-12
     *
     * @var string
     */
    public $osMonitorVersion;

    /**
     * @description The status of the CloudMonitor agent. Valid values:
     *
     *   running: The CloudMonitor agent is running.
     *   stopped: The CloudMonitor agent is stopped.
     *   installing: The CloudMonitor agent is being installed.
     *   install_faild: The CloudMonitor agent fails to be installed.
     *   abnormal: The CloudMonitor agent is not properly installed.
     *   not_installed: The CloudMonitor agent is not installed.
     *
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'agentInstallErrorCode' => 'AgentInstallErrorCode',
        'autoInstall'           => 'AutoInstall',
        'instanceId'            => 'InstanceId',
        'osMonitorConfig'       => 'OsMonitorConfig',
        'osMonitorErrorCode'    => 'OsMonitorErrorCode',
        'osMonitorErrorDetail'  => 'OsMonitorErrorDetail',
        'osMonitorStatus'       => 'OsMonitorStatus',
        'osMonitorVersion'      => 'OsMonitorVersion',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return nodeStatus
     */
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
