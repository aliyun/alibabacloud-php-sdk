<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantStatusResponseBody\instanceCloudAssistantStatusSet;

use AlibabaCloud\Tea\Model;

class instanceCloudAssistantStatus extends Model
{
    /**
     * @var string
     */
    public $cloudAssistantStatus;

    /**
     * @var string
     */
    public $lastInvokedTime;

    /**
     * @var string
     */
    public $cloudAssistantVersion;

    /**
     * @var int
     */
    public $activeTaskCount;

    /**
     * @var int
     */
    public $invocationCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $OSType;
    protected $_name = [
        'cloudAssistantStatus'  => 'CloudAssistantStatus',
        'lastInvokedTime'       => 'LastInvokedTime',
        'cloudAssistantVersion' => 'CloudAssistantVersion',
        'activeTaskCount'       => 'ActiveTaskCount',
        'invocationCount'       => 'InvocationCount',
        'instanceId'            => 'InstanceId',
        'OSType'                => 'OSType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudAssistantStatus) {
            $res['CloudAssistantStatus'] = $this->cloudAssistantStatus;
        }
        if (null !== $this->lastInvokedTime) {
            $res['LastInvokedTime'] = $this->lastInvokedTime;
        }
        if (null !== $this->cloudAssistantVersion) {
            $res['CloudAssistantVersion'] = $this->cloudAssistantVersion;
        }
        if (null !== $this->activeTaskCount) {
            $res['ActiveTaskCount'] = $this->activeTaskCount;
        }
        if (null !== $this->invocationCount) {
            $res['InvocationCount'] = $this->invocationCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceCloudAssistantStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudAssistantStatus'])) {
            $model->cloudAssistantStatus = $map['CloudAssistantStatus'];
        }
        if (isset($map['LastInvokedTime'])) {
            $model->lastInvokedTime = $map['LastInvokedTime'];
        }
        if (isset($map['CloudAssistantVersion'])) {
            $model->cloudAssistantVersion = $map['CloudAssistantVersion'];
        }
        if (isset($map['ActiveTaskCount'])) {
            $model->activeTaskCount = $map['ActiveTaskCount'];
        }
        if (isset($map['InvocationCount'])) {
            $model->invocationCount = $map['InvocationCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }

        return $model;
    }
}
