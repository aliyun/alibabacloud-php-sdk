<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSasPmAgentListResponseBody;

use AlibabaCloud\Tea\Model;

class sasPmAgentList extends Model
{
    /**
     * @var string
     */
    public $aliyunAssistId;

    /**
     * @var string
     */
    public $aliyunMonitorId;

    /**
     * @var int
     */
    public $assistInstallResult;

    /**
     * @var int
     */
    public $assistInstallStatus;

    /**
     * @var int
     */
    public $monitorInstallResult;

    /**
     * @var int
     */
    public $monitorInstallStatus;

    /**
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
