<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListJobInstanceWorkersResponseBody\jobInstanceWorkers;

use AlibabaCloud\Tea\Model;

class jobInstanceWorkerInfo extends Model
{
    /**
     * @var string
     */
    public $containerInfo;

    /**
     * @var string
     */
    public $instanceInfo;

    /**
     * @var string
     */
    public $applicationId;
    protected $_name = [
        'containerInfo' => 'ContainerInfo',
        'instanceInfo'  => 'InstanceInfo',
        'applicationId' => 'ApplicationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerInfo) {
            $res['ContainerInfo'] = $this->containerInfo;
        }
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = $this->instanceInfo;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInstanceWorkerInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerInfo'])) {
            $model->containerInfo = $map['ContainerInfo'];
        }
        if (isset($map['InstanceInfo'])) {
            $model->instanceInfo = $map['InstanceInfo'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        return $model;
    }
}
