<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponseBody\nodeStatusList;

use AlibabaCloud\Tea\Model;

class nodeStatus extends Model
{
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
     * @example true
     *
     * @var bool
     */
    public $autoInstall;

    /**
     * @description The ID of the request.
     *
     * @example i-hp3dunahluwajv6f****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $osMonitorConfig;

    /**
     * @example install_fail
     *
     * @var string
     */
    public $osMonitorErrorCode;

    /**
     * @example Command.ErrorCode.Fail.Downlaod.REGIN_ID
     *
     * @var string
     */
    public $osMonitorErrorDetail;

    /**
     * @description For more information about common request parameters, see [Common parameters](~~199331~~).
     *
     * @example running
     *
     * @var string
     */
    public $osMonitorStatus;

    /**
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
        'autoInstall'          => 'AutoInstall',
        'instanceId'           => 'InstanceId',
        'osMonitorConfig'      => 'OsMonitorConfig',
        'osMonitorErrorCode'   => 'OsMonitorErrorCode',
        'osMonitorErrorDetail' => 'OsMonitorErrorDetail',
        'osMonitorStatus'      => 'OsMonitorStatus',
        'osMonitorVersion'     => 'OsMonitorVersion',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
