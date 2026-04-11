<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\InstallAppResponseBody;

use AlibabaCloud\Dara\Model;

class childTaskInfo extends Model
{
    /**
     * @var string
     */
    public $childTaskId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'childTaskId' => 'ChildTaskId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childTaskId) {
            $res['ChildTaskId'] = $this->childTaskId;
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
        if (isset($map['ChildTaskId'])) {
            $model->childTaskId = $map['ChildTaskId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
