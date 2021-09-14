<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponseBody\hostInstanceConsoleInfos;

use AlibabaCloud\Tea\Model;

class perfInfo extends Model
{
    /**
     * @var float
     */
    public $perfIdbPio;

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
    public $cpuRatio;
    protected $_name = [
        'perfIdbPio' => 'PerfIdbPio',
        'diskCurr'   => 'DiskCurr',
        'memRatio'   => 'MemRatio',
        'cpuRatio'   => 'CpuRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->perfIdbPio) {
            $res['PerfIdbPio'] = $this->perfIdbPio;
        }
        if (null !== $this->diskCurr) {
            $res['DiskCurr'] = $this->diskCurr;
        }
        if (null !== $this->memRatio) {
            $res['MemRatio'] = $this->memRatio;
        }
        if (null !== $this->cpuRatio) {
            $res['CpuRatio'] = $this->cpuRatio;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return perfInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerfIdbPio'])) {
            $model->perfIdbPio = $map['PerfIdbPio'];
        }
        if (isset($map['DiskCurr'])) {
            $model->diskCurr = $map['DiskCurr'];
        }
        if (isset($map['MemRatio'])) {
            $model->memRatio = $map['MemRatio'];
        }
        if (isset($map['CpuRatio'])) {
            $model->cpuRatio = $map['CpuRatio'];
        }

        return $model;
    }
}
