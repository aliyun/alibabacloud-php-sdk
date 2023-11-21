<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponseBody\hostInstanceConsoleInfos;

use AlibabaCloud\Tea\Model;

class perfInfo extends Model
{
    /**
     * @description The number of CPU cores of the host.
     *
     * @example 16
     *
     * @var float
     */
    public $cpuRatio;

    /**
     * @description The disk storage of the host. Unit: GB.
     *
     * @example 1000
     *
     * @var float
     */
    public $diskCurr;

    /**
     * @description The memory size of the host. Unit: GB.
     *
     * @example 64
     *
     * @var float
     */
    public $memRatio;

    /**
     * @description The number of physical I/O operations performed on the host.
     *
     * @example 30
     *
     * @var float
     */
    public $perfIdbPio;
    protected $_name = [
        'cpuRatio'   => 'CpuRatio',
        'diskCurr'   => 'DiskCurr',
        'memRatio'   => 'MemRatio',
        'perfIdbPio' => 'PerfIdbPio',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return perfInfo
     */
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
