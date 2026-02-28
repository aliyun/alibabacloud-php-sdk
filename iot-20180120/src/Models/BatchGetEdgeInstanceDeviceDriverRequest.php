<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class BatchGetEdgeInstanceDeviceDriverRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $iotIds;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'iotIds' => 'IotIds',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->iotIds)) {
            Model::validateArray($this->iotIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->iotIds) {
            if (\is_array($this->iotIds)) {
                $res['IotIds'] = [];
                $n1 = 0;
                foreach ($this->iotIds as $item1) {
                    $res['IotIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IotIds'])) {
            if (!empty($map['IotIds'])) {
                $model->iotIds = [];
                $n1 = 0;
                foreach ($map['IotIds'] as $item1) {
                    $model->iotIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
