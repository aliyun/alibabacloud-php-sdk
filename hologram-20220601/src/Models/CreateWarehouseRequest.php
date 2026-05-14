<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class CreateWarehouseRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $warehouseName;
    protected $_name = [
        'regionId' => 'RegionId',
        'config' => 'config',
        'cpu' => 'cpu',
        'warehouseName' => 'warehouseName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->warehouseName) {
            $res['warehouseName'] = $this->warehouseName;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['warehouseName'])) {
            $model->warehouseName = $map['warehouseName'];
        }

        return $model;
    }
}
