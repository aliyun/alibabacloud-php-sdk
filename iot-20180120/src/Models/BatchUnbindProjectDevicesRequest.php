<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchUnbindProjectDevicesRequest\devices;

class BatchUnbindProjectDevicesRequest extends Model
{
    /**
     * @var devices[]
     */
    public $devices;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'devices' => 'Devices',
        'iotInstanceId' => 'IotInstanceId',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->devices)) {
            Model::validateArray($this->devices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devices) {
            if (\is_array($this->devices)) {
                $res['Devices'] = [];
                $n1 = 0;
                foreach ($this->devices as $item1) {
                    $res['Devices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n1 = 0;
                foreach ($map['Devices'] as $item1) {
                    $model->devices[$n1] = devices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
