<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList\triggers\attributeValues;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList\triggers\device;

class triggers extends Model
{
    /**
     * @var attributeValues[]
     */
    public $attributeValues;

    /**
     * @var string[]
     */
    public $corpusList;

    /**
     * @var device
     */
    public $device;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'attributeValues' => 'AttributeValues',
        'corpusList' => 'CorpusList',
        'device' => 'Device',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->attributeValues)) {
            Model::validateArray($this->attributeValues);
        }
        if (\is_array($this->corpusList)) {
            Model::validateArray($this->corpusList);
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

        if (null !== $this->corpusList) {
            if (\is_array($this->corpusList)) {
                $res['CorpusList'] = [];
                $n1 = 0;
                foreach ($this->corpusList as $item1) {
                    $res['CorpusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->device) {
            $res['Device'] = null !== $this->device ? $this->device->toArray($noStream) : $this->device;
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

        if (isset($map['CorpusList'])) {
            if (!empty($map['CorpusList'])) {
                $model->corpusList = [];
                $n1 = 0;
                foreach ($map['CorpusList'] as $item1) {
                    $model->corpusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Device'])) {
            $model->device = device::fromMap($map['Device']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
