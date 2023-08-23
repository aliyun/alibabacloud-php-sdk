<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList\triggers\attributeValues;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportRoomGenieScenesRequest\sceneList\triggers\device;
use AlibabaCloud\Tea\Model;

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
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'attributeValues' => 'AttributeValues',
        'corpusList'      => 'CorpusList',
        'device'          => 'Device',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeValues) {
            $res['AttributeValues'] = [];
            if (null !== $this->attributeValues && \is_array($this->attributeValues)) {
                $n = 0;
                foreach ($this->attributeValues as $item) {
                    $res['AttributeValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->corpusList) {
            $res['CorpusList'] = $this->corpusList;
        }
        if (null !== $this->device) {
            $res['Device'] = null !== $this->device ? $this->device->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeValues'])) {
            if (!empty($map['AttributeValues'])) {
                $model->attributeValues = [];
                $n                      = 0;
                foreach ($map['AttributeValues'] as $item) {
                    $model->attributeValues[$n++] = null !== $item ? attributeValues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CorpusList'])) {
            if (!empty($map['CorpusList'])) {
                $model->corpusList = $map['CorpusList'];
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
