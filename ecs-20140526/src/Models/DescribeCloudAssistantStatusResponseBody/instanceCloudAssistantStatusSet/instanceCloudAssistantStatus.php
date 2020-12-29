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
    public $cloudAssistantVersion;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'cloudAssistantStatus'  => 'CloudAssistantStatus',
        'cloudAssistantVersion' => 'CloudAssistantVersion',
        'instanceId'            => 'InstanceId',
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
        if (null !== $this->cloudAssistantVersion) {
            $res['CloudAssistantVersion'] = $this->cloudAssistantVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['CloudAssistantVersion'])) {
            $model->cloudAssistantVersion = $map['CloudAssistantVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
