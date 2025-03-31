<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class GetArtifactBuildTaskRequest extends Model
{
    /**
     * @var string
     */
    public $buildTaskId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'buildTaskId' => 'BuildTaskId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
