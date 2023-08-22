<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CancelArtifactBuildTaskRequest extends Model
{
    /**
     * @description The ID of the artifact building task.
     *
     * @example i2ei-12****
     *
     * @var string
     */
    public $buildTaskId;

    /**
     * @description The ID of the instance.
     *
     * @example cri-shac42yvqzvq****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'buildTaskId' => 'BuildTaskId',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildTaskId) {
            $res['BuildTaskId'] = $this->buildTaskId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelArtifactBuildTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildTaskId'])) {
            $model->buildTaskId = $map['BuildTaskId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
