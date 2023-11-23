<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetResourceGroupTotalResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCPU;

    /**
     * @var int
     */
    public $totalGPU;

    /**
     * @var GPUInfo[]
     */
    public $totalGPUInfos;

    /**
     * @var int
     */
    public $totalMemory;
    protected $_name = [
        'totalCPU'      => 'totalCPU',
        'totalGPU'      => 'totalGPU',
        'totalGPUInfos' => 'totalGPUInfos',
        'totalMemory'   => 'totalMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCPU) {
            $res['totalCPU'] = $this->totalCPU;
        }
        if (null !== $this->totalGPU) {
            $res['totalGPU'] = $this->totalGPU;
        }
        if (null !== $this->totalGPUInfos) {
            $res['totalGPUInfos'] = [];
            if (null !== $this->totalGPUInfos && \is_array($this->totalGPUInfos)) {
                $n = 0;
                foreach ($this->totalGPUInfos as $item) {
                    $res['totalGPUInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalMemory) {
            $res['totalMemory'] = $this->totalMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceGroupTotalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['totalCPU'])) {
            $model->totalCPU = $map['totalCPU'];
        }
        if (isset($map['totalGPU'])) {
            $model->totalGPU = $map['totalGPU'];
        }
        if (isset($map['totalGPUInfos'])) {
            if (!empty($map['totalGPUInfos'])) {
                $model->totalGPUInfos = [];
                $n                    = 0;
                foreach ($map['totalGPUInfos'] as $item) {
                    $model->totalGPUInfos[$n++] = null !== $item ? GPUInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalMemory'])) {
            $model->totalMemory = $map['totalMemory'];
        }

        return $model;
    }
}
