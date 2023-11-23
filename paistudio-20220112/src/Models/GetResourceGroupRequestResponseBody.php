<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetResourceGroupRequestResponseBody extends Model
{
    /**
     * @var int
     */
    public $requestCPU;

    /**
     * @var int
     */
    public $requestGPU;

    /**
     * @var GPUInfo[]
     */
    public $requestGPUInfos;

    /**
     * @var int
     */
    public $requestMemory;
    protected $_name = [
        'requestCPU'      => 'requestCPU',
        'requestGPU'      => 'requestGPU',
        'requestGPUInfos' => 'requestGPUInfos',
        'requestMemory'   => 'requestMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestCPU) {
            $res['requestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestGPU) {
            $res['requestGPU'] = $this->requestGPU;
        }
        if (null !== $this->requestGPUInfos) {
            $res['requestGPUInfos'] = [];
            if (null !== $this->requestGPUInfos && \is_array($this->requestGPUInfos)) {
                $n = 0;
                foreach ($this->requestGPUInfos as $item) {
                    $res['requestGPUInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestMemory) {
            $res['requestMemory'] = $this->requestMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceGroupRequestResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestCPU'])) {
            $model->requestCPU = $map['requestCPU'];
        }
        if (isset($map['requestGPU'])) {
            $model->requestGPU = $map['requestGPU'];
        }
        if (isset($map['requestGPUInfos'])) {
            if (!empty($map['requestGPUInfos'])) {
                $model->requestGPUInfos = [];
                $n                      = 0;
                foreach ($map['requestGPUInfos'] as $item) {
                    $model->requestGPUInfos[$n++] = null !== $item ? GPUInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestMemory'])) {
            $model->requestMemory = $map['requestMemory'];
        }

        return $model;
    }
}
