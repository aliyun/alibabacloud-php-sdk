<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstanceSpecsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description None
     *
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @description 单数据节点存储空间最大值
     *
     * @var int
     */
    public $maxDisk;

    /**
     * @description Unit: GB
     *
     * @example 4
     *
     * @var int
     */
    public $mem;

    /**
     * @description 单数据节点存储空间最小值
     *
     * @var int
     */
    public $minDisk;
    protected $_name = [
        'cpu'     => 'cpu',
        'maxDisk' => 'maxDisk',
        'mem'     => 'mem',
        'minDisk' => 'minDisk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->maxDisk) {
            $res['maxDisk'] = $this->maxDisk;
        }
        if (null !== $this->mem) {
            $res['mem'] = $this->mem;
        }
        if (null !== $this->minDisk) {
            $res['minDisk'] = $this->minDisk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['maxDisk'])) {
            $model->maxDisk = $map['maxDisk'];
        }
        if (isset($map['mem'])) {
            $model->mem = $map['mem'];
        }
        if (isset($map['minDisk'])) {
            $model->minDisk = $map['minDisk'];
        }

        return $model;
    }
}
