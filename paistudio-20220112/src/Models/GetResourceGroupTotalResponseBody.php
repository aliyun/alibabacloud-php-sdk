<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

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
        'totalCPU' => 'totalCPU',
        'totalGPU' => 'totalGPU',
        'totalGPUInfos' => 'totalGPUInfos',
        'totalMemory' => 'totalMemory',
    ];

    public function validate()
    {
        if (\is_array($this->totalGPUInfos)) {
            Model::validateArray($this->totalGPUInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalCPU) {
            $res['totalCPU'] = $this->totalCPU;
        }

        if (null !== $this->totalGPU) {
            $res['totalGPU'] = $this->totalGPU;
        }

        if (null !== $this->totalGPUInfos) {
            if (\is_array($this->totalGPUInfos)) {
                $res['totalGPUInfos'] = [];
                $n1 = 0;
                foreach ($this->totalGPUInfos as $item1) {
                    $res['totalGPUInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalMemory) {
            $res['totalMemory'] = $this->totalMemory;
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
        if (isset($map['totalCPU'])) {
            $model->totalCPU = $map['totalCPU'];
        }

        if (isset($map['totalGPU'])) {
            $model->totalGPU = $map['totalGPU'];
        }

        if (isset($map['totalGPUInfos'])) {
            if (!empty($map['totalGPUInfos'])) {
                $model->totalGPUInfos = [];
                $n1 = 0;
                foreach ($map['totalGPUInfos'] as $item1) {
                    $model->totalGPUInfos[$n1] = GPUInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalMemory'])) {
            $model->totalMemory = $map['totalMemory'];
        }

        return $model;
    }
}
