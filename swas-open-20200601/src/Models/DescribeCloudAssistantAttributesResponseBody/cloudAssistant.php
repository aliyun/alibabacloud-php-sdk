<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudAssistantAttributesResponseBody;

use AlibabaCloud\Dara\Model;

class cloudAssistant extends Model
{
    /**
     * @var int
     */
    public $activeTaskCount;
    /**
     * @var string
     */
    public $cloudAssistantStatus;
    /**
     * @var string
     */
    public $cloudAssistantVersion;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $invocationCount;
    /**
     * @var string
     */
    public $lastHeartbeatTime;
    /**
     * @var string
     */
    public $lastInvokedTime;
    /**
     * @var string
     */
    public $OSType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
