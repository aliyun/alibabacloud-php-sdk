<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList\actions\attributeValues;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList\actions\device;

class actions extends Model
{
    /**
     * @var attributeValues[]
     */
    public $attributeValues;

    /**
     * @var device
     */
    public $device;

    /**
     * @var string
     */
    public $reply;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'attributeValues' => 'AttributeValues',
        'device' => 'Device',
        'reply' => 'Reply',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->attributeValues)) {
            Model::validateArray($this->attributeValues);
        }
        if (null !== $this->device) {
            $this->device->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeValues) {
            if (\is_array($this->attributeValues)) {
                $res['AttributeValues'] = [];
                $n1 = 0;
                foreach ($this->attributeValues as $item1) {
                    $res['AttributeValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->device) {
            $res['Device'] = null !== $this->device ? $this->device->toArray($noStream) : $this->device;
        }

        if (null !== $this->reply) {
            $res['Reply'] = $this->reply;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AttributeValues'])) {
            if (!empty($map['AttributeValues'])) {
                $model->attributeValues = [];
                $n1 = 0;
                foreach ($map['AttributeValues'] as $item1) {
                    $model->attributeValues[$n1] = attributeValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Device'])) {
            $model->device = device::fromMap($map['Device']);
        }

        if (isset($map['Reply'])) {
            $model->reply = $map['Reply'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
