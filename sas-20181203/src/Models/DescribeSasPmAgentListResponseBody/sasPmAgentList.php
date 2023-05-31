<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSasPmAgentListResponseBody;

use AlibabaCloud\Tea\Model;

class sasPmAgentList extends Model
{
    /**
     * @description The ID of Cloud Assistant.
     *
     * @example mi-hz034jn***yxhc0
     *
     * @var string
     */
    public $aliyunAssistId;

    /**
     * @description The ID of the CloudMonitor agent.
     *
     * @example 5d5ef6be-54ff-11ed-82cf-8f01475e****
     *
     * @var string
     */
    public $aliyunMonitorId;

    /**
     * @description The installation result of Cloud Assistant. Valid values:
     *
     *   **0**: SUCCESS
     *   **1**: MISSING_PARAM
     *   **2**: UNKNOWN_SYSTEM
     *   **3**: DOWNLOAD_FAILED
     *   **4**: INSTALL_FAILED
     *
     * @example 0
     *
     * @var int
     */
    public $assistInstallResult;

    /**
     * @description The status of Cloud Assistant. Valid values:
     *
     *   **0**: installing
     *   **1**: installed
     *   **2**: installation failed
     *   **3**: installation timed out
     *
     * @example 1
     *
     * @var int
     */
    public $assistInstallStatus;

    /**
     * @description The installation result of the CloudMonitor agent. Valid values:
     *
     *   **0**: failed
     *   **1**: successful
     *
     * @example 1
     *
     * @var int
     */
    public $monitorInstallResult;

    /**
     * @description The status of the CloudMonitor agent. Valid values:
     *
     *   **0**: installation failed
     *   **1**: installed
     *
     * @example 1
     *
     * @var int
     */
    public $monitorInstallStatus;

    /**
     * @description The UUID of the server.
     *
     * @example 87f1724d-075e-48d3-95fd-78c2dd36****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliyunAssistId'       => 'AliyunAssistId',
        'aliyunMonitorId'      => 'AliyunMonitorId',
        'assistInstallResult'  => 'AssistInstallResult',
        'assistInstallStatus'  => 'AssistInstallStatus',
        'monitorInstallResult' => 'MonitorInstallResult',
        'monitorInstallStatus' => 'MonitorInstallStatus',
        'uuid'                 => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunAssistId) {
            $res['AliyunAssistId'] = $this->aliyunAssistId;
        }
        if (null !== $this->aliyunMonitorId) {
            $res['AliyunMonitorId'] = $this->aliyunMonitorId;
        }
        if (null !== $this->assistInstallResult) {
            $res['AssistInstallResult'] = $this->assistInstallResult;
        }
        if (null !== $this->assistInstallStatus) {
            $res['AssistInstallStatus'] = $this->assistInstallStatus;
        }
        if (null !== $this->monitorInstallResult) {
            $res['MonitorInstallResult'] = $this->monitorInstallResult;
        }
        if (null !== $this->monitorInstallStatus) {
            $res['MonitorInstallStatus'] = $this->monitorInstallStatus;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sasPmAgentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunAssistId'])) {
            $model->aliyunAssistId = $map['AliyunAssistId'];
        }
        if (isset($map['AliyunMonitorId'])) {
            $model->aliyunMonitorId = $map['AliyunMonitorId'];
        }
        if (isset($map['AssistInstallResult'])) {
            $model->assistInstallResult = $map['AssistInstallResult'];
        }
        if (isset($map['AssistInstallStatus'])) {
            $model->assistInstallStatus = $map['AssistInstallStatus'];
        }
        if (isset($map['MonitorInstallResult'])) {
            $model->monitorInstallResult = $map['MonitorInstallResult'];
        }
        if (isset($map['MonitorInstallStatus'])) {
            $model->monitorInstallStatus = $map['MonitorInstallStatus'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
