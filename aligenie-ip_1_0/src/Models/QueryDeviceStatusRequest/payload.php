<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusRequest\payload\locationDevices;

class payload extends Model
{
    /**
     * @var locationDevices[]
     */
    public $locationDevices;

    /**
     * @var string[]
     */
    public $properties;
    protected $_name = [
        'locationDevices' => 'LocationDevices',
        'properties' => 'Properties',
    ];

    public function validate()
    {
        if (\is_array($this->locationDevices)) {
            Model::validateArray($this->locationDevices);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->locationDevices) {
            if (\is_array($this->locationDevices)) {
                $res['LocationDevices'] = [];
                $n1 = 0;
                foreach ($this->locationDevices as $item1) {
                    $res['LocationDevices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
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
        if (isset($map['LocationDevices'])) {
            if (!empty($map['LocationDevices'])) {
                $model->locationDevices = [];
                $n1 = 0;
                foreach ($map['LocationDevices'] as $item1) {
                    $model->locationDevices[$n1] = locationDevices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
