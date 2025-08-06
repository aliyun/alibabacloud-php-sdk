<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

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
        'requestCPU' => 'requestCPU',
        'requestGPU' => 'requestGPU',
        'requestGPUInfos' => 'requestGPUInfos',
        'requestMemory' => 'requestMemory',
    ];

    public function validate()
    {
        if (\is_array($this->requestGPUInfos)) {
            Model::validateArray($this->requestGPUInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestCPU) {
            $res['requestCPU'] = $this->requestCPU;
        }

        if (null !== $this->requestGPU) {
            $res['requestGPU'] = $this->requestGPU;
        }

        if (null !== $this->requestGPUInfos) {
            if (\is_array($this->requestGPUInfos)) {
                $res['requestGPUInfos'] = [];
                $n1 = 0;
                foreach ($this->requestGPUInfos as $item1) {
                    $res['requestGPUInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestMemory) {
            $res['requestMemory'] = $this->requestMemory;
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
        if (isset($map['requestCPU'])) {
            $model->requestCPU = $map['requestCPU'];
        }

        if (isset($map['requestGPU'])) {
            $model->requestGPU = $map['requestGPU'];
        }

        if (isset($map['requestGPUInfos'])) {
            if (!empty($map['requestGPUInfos'])) {
                $model->requestGPUInfos = [];
                $n1 = 0;
                foreach ($map['requestGPUInfos'] as $item1) {
                    $model->requestGPUInfos[$n1] = GPUInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestMemory'])) {
            $model->requestMemory = $map['requestMemory'];
        }

        return $model;
    }
}
