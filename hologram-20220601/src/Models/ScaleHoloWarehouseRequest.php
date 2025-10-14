<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class ScaleHoloWarehouseRequest extends Model
{
    /**
     * @var int
     */
    public $clusterCount;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'clusterCount' => 'clusterCount',
        'cpu' => 'cpu',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterCount) {
            $res['clusterCount'] = $this->clusterCount;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['clusterCount'])) {
            $model->clusterCount = $map['clusterCount'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
