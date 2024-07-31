<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudAssistantAttributesResponseBody;

use AlibabaCloud\Tea\Model;

class cloudAssistant extends Model
{
    /**
     * @description The number of active tasks in Command Assistant.
     *
     * @example 0
     *
     * @var int
     */
    public $activeTaskCount;

    /**
     * @description Indicates whether Command Assistant is running. Valid values:
     *
     * false: Heartbeats are not detected in the last 2 minutes.
     * @example true
     *
     * @var string
     */
    public $cloudAssistantStatus;

    /**
     * @description The version number of the Command Assistant agent. Null is returned if the Command Assistant agent is not installed or is not running.
     *
     * @example 2.2.0.106
     *
     * @var string
     */
    public $cloudAssistantVersion;

    /**
     * @description The ID of the simple application server.
     *
     * @example 85dbe3e7cc7b49e1a3df4af3bfa4ebbf
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of completed tasks in Command Assistant.
     *
     * @example 4
     *
     * @var int
     */
    public $invocationCount;

    /**
     * @description The time when the last heartbeat of Command Assistant was detected. The value is updated every minute on average. The interval can be 55, 60, or 65 seconds.
     *
     * @example 2021-03-15T09:00:00Z
     *
     * @var string
     */
    public $lastHeartbeatTime;

    /**
     * @description The time when commands were last run.
     *
     * @example 2021-03-15T08:00:00Z
     *
     * @var string
     */
    public $lastInvokedTime;

    /**
     * @description The OS type of the simple application server. Valid values:
     *
     *   Windows
     *   Linux
     *   FreeBSD
     *
     * @example Linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description Indicates whether Command Assistant supports session management. If Command Assistant does not support session management, the version of the Command Assistant agent is too earlier. We recommend that you update your Command Assistant agent to the latest version.
     *
     * If your simple application server runs Linux, the version of the Command Assistant agent on the server must be 2.2.3.189 or later. If your simple application server runs Windows, the version of the Command Assistant agent on the server must be 2.1.3.189 or later.
     * @example true
     *
     * @var bool
     */
    public $supportSessionManager;
    protected $_name = [
        'activeTaskCount'       => 'ActiveTaskCount',
        'cloudAssistantStatus'  => 'CloudAssistantStatus',
        'cloudAssistantVersion' => 'CloudAssistantVersion',
        'instanceId'            => 'InstanceId',
        'invocationCount'       => 'InvocationCount',
        'lastHeartbeatTime'     => 'LastHeartbeatTime',
        'lastInvokedTime'       => 'LastInvokedTime',
        'OSType'                => 'OSType',
        'supportSessionManager' => 'SupportSessionManager',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeTaskCount) {
            $res['ActiveTaskCount'] = $this->activeTaskCount;
        }
        if (null !== $this->cloudAssistantStatus) {
            $res['CloudAssistantStatus'] = $this->cloudAssistantStatus;
        }
        if (null !== $this->cloudAssistantVersion) {
            $res['CloudAssistantVersion'] = $this->cloudAssistantVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invocationCount) {
            $res['InvocationCount'] = $this->invocationCount;
        }
        if (null !== $this->lastHeartbeatTime) {
            $res['LastHeartbeatTime'] = $this->lastHeartbeatTime;
        }
        if (null !== $this->lastInvokedTime) {
            $res['LastInvokedTime'] = $this->lastInvokedTime;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->supportSessionManager) {
            $res['SupportSessionManager'] = $this->supportSessionManager;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudAssistant
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveTaskCount'])) {
            $model->activeTaskCount = $map['ActiveTaskCount'];
        }
        if (isset($map['CloudAssistantStatus'])) {
            $model->cloudAssistantStatus = $map['CloudAssistantStatus'];
        }
        if (isset($map['CloudAssistantVersion'])) {
            $model->cloudAssistantVersion = $map['CloudAssistantVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvocationCount'])) {
            $model->invocationCount = $map['InvocationCount'];
        }
        if (isset($map['LastHeartbeatTime'])) {
            $model->lastHeartbeatTime = $map['LastHeartbeatTime'];
        }
        if (isset($map['LastInvokedTime'])) {
            $model->lastInvokedTime = $map['LastInvokedTime'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['SupportSessionManager'])) {
            $model->supportSessionManager = $map['SupportSessionManager'];
        }

        return $model;
    }
}
