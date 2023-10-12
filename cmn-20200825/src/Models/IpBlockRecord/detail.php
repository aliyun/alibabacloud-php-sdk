<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\IpBlockRecord;

use AlibabaCloud\SDK\Cmn\V20200825\Models\IpBlockRecord\detail\zoneLayer;
use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @example 互联地址
     *
     * @var string
     */
    public $businessTypeName;

    /**
     * @example ASW-1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 10.0.0.1
     *
     * @var string
     */
    public $gateway;

    /**
     * @var string[]
     */
    public $parentIpBlocks;

    /**
     * @var zoneLayer[]
     */
    public $zoneLayer;
    protected $_name = [
        'businessTypeName' => 'BusinessTypeName',
        'deviceName'       => 'DeviceName',
        'gateway'          => 'Gateway',
        'parentIpBlocks'   => 'ParentIpBlocks',
        'zoneLayer'        => 'ZoneLayer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessTypeName) {
            $res['BusinessTypeName'] = $this->businessTypeName;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->gateway) {
            $res['Gateway'] = $this->gateway;
        }
        if (null !== $this->parentIpBlocks) {
            $res['ParentIpBlocks'] = $this->parentIpBlocks;
        }
        if (null !== $this->zoneLayer) {
            $res['ZoneLayer'] = [];
            if (null !== $this->zoneLayer && \is_array($this->zoneLayer)) {
                $n = 0;
                foreach ($this->zoneLayer as $item) {
                    $res['ZoneLayer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessTypeName'])) {
            $model->businessTypeName = $map['BusinessTypeName'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Gateway'])) {
            $model->gateway = $map['Gateway'];
        }
        if (isset($map['ParentIpBlocks'])) {
            if (!empty($map['ParentIpBlocks'])) {
                $model->parentIpBlocks = $map['ParentIpBlocks'];
            }
        }
        if (isset($map['ZoneLayer'])) {
            if (!empty($map['ZoneLayer'])) {
                $model->zoneLayer = [];
                $n                = 0;
                foreach ($map['ZoneLayer'] as $item) {
                    $model->zoneLayer[$n++] = null !== $item ? zoneLayer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
