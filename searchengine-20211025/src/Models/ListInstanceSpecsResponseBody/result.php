<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstanceSpecsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $maxDisk;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var int
     */
    public $minDisk;
    protected $_name = [
        'cpu' => 'cpu',
        'maxDisk' => 'maxDisk',
        'mem' => 'mem',
        'minDisk' => 'minDisk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
