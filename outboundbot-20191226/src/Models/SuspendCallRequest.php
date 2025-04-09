<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class SuspendCallRequest extends Model
{
    /**
     * @var string[]
     */
    public $calledNumbers;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'calledNumbers' => 'CalledNumbers',
        'groupId' => 'GroupId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->calledNumbers)) {
            Model::validateArray($this->calledNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calledNumbers) {
            if (\is_array($this->calledNumbers)) {
                $res['CalledNumbers'] = [];
                $n1 = 0;
                foreach ($this->calledNumbers as $item1) {
                    $res['CalledNumbers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (isset($map['CalledNumbers'])) {
            if (!empty($map['CalledNumbers'])) {
                $model->calledNumbers = [];
                $n1 = 0;
                foreach ($map['CalledNumbers'] as $item1) {
                    $model->calledNumbers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
