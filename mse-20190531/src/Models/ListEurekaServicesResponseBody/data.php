<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListEurekaServicesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $instancesId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $upStatus;
    protected $_name = [
        'instancesId' => 'InstancesId',
        'name' => 'Name',
        'upStatus' => 'UpStatus',
    ];

    public function validate()
    {
        if (\is_array($this->instancesId)) {
            Model::validateArray($this->instancesId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instancesId) {
            if (\is_array($this->instancesId)) {
                $res['InstancesId'] = [];
                $n1 = 0;
                foreach ($this->instancesId as $item1) {
                    $res['InstancesId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->upStatus) {
            $res['UpStatus'] = $this->upStatus;
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
        if (isset($map['InstancesId'])) {
            if (!empty($map['InstancesId'])) {
                $model->instancesId = [];
                $n1 = 0;
                foreach ($map['InstancesId'] as $item1) {
                    $model->instancesId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UpStatus'])) {
            $model->upStatus = $map['UpStatus'];
        }

        return $model;
    }
}
