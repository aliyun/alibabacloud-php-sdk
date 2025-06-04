<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponseBody\hostInstanceConsoleInfos;

use AlibabaCloud\Dara\Model;

class perfInfo extends Model
{
    /**
     * @var float
     */
    public $cpuRatio;

    /**
     * @var float
     */
    public $diskCurr;

    /**
     * @var float
     */
    public $memRatio;

    /**
     * @var float
     */
    public $perfIdbPio;
    protected $_name = [
        'cpuRatio' => 'CpuRatio',
        'diskCurr' => 'DiskCurr',
        'memRatio' => 'MemRatio',
        'perfIdbPio' => 'PerfIdbPio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuRatio) {
            $res['CpuRatio'] = $this->cpuRatio;
        }

        if (null !== $this->diskCurr) {
            $res['DiskCurr'] = $this->diskCurr;
        }

        if (null !== $this->memRatio) {
            $res['MemRatio'] = $this->memRatio;
        }

        if (null !== $this->perfIdbPio) {
            $res['PerfIdbPio'] = $this->perfIdbPio;
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
        if (isset($map['CpuRatio'])) {
            $model->cpuRatio = $map['CpuRatio'];
        }

        if (isset($map['DiskCurr'])) {
            $model->diskCurr = $map['DiskCurr'];
        }

        if (isset($map['MemRatio'])) {
            $model->memRatio = $map['MemRatio'];
        }

        if (isset($map['PerfIdbPio'])) {
            $model->perfIdbPio = $map['PerfIdbPio'];
        }

        return $model;
    }
}
