<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ZoneType\zoneTypeLayer;
use AlibabaCloud\Tea\Model;

class ZoneType extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @example 办公区
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $zoneTypeId;

    /**
     * @var zoneTypeLayer[]
     */
    public $zoneTypeLayer;

    /**
     * @var string
     */
    public $zoneTypeName;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'name'          => 'Name',
        'zoneTypeId'    => 'ZoneTypeId',
        'zoneTypeLayer' => 'ZoneTypeLayer',
        'zoneTypeName'  => 'ZoneTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->zoneTypeId) {
            $res['ZoneTypeId'] = $this->zoneTypeId;
        }
        if (null !== $this->zoneTypeLayer) {
            $res['ZoneTypeLayer'] = [];
            if (null !== $this->zoneTypeLayer && \is_array($this->zoneTypeLayer)) {
                $n = 0;
                foreach ($this->zoneTypeLayer as $item) {
                    $res['ZoneTypeLayer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneTypeName) {
            $res['ZoneTypeName'] = $this->zoneTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ZoneType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ZoneTypeId'])) {
            $model->zoneTypeId = $map['ZoneTypeId'];
        }
        if (isset($map['ZoneTypeLayer'])) {
            if (!empty($map['ZoneTypeLayer'])) {
                $model->zoneTypeLayer = [];
                $n                    = 0;
                foreach ($map['ZoneTypeLayer'] as $item) {
                    $model->zoneTypeLayer[$n++] = null !== $item ? zoneTypeLayer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneTypeName'])) {
            $model->zoneTypeName = $map['ZoneTypeName'];
        }

        return $model;
    }
}
