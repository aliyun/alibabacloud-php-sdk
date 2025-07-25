<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\QueryResourceStaticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class realTimeRes extends Model
{
    /**
     * @description The CPU usage. Unit: core per minute.
     *
     * @example 13
     *
     * @var float
     */
    public $cpu;

    /**
     * @description The storage size of the temporary storage space. Unit: GiB.
     *
     * @example 0
     *
     * @var float
     */
    public $ephemeralStorage;

    /**
     * @description The memory usage. Unit: GiB per minute.
     *
     * @example 26
     *
     * @var float
     */
    public $memory;
    protected $_name = [
        'cpu' => 'Cpu',
        'ephemeralStorage' => 'EphemeralStorage',
        'memory' => 'Memory',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->ephemeralStorage) {
            $res['EphemeralStorage'] = $this->ephemeralStorage;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realTimeRes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['EphemeralStorage'])) {
            $model->ephemeralStorage = $map['EphemeralStorage'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
