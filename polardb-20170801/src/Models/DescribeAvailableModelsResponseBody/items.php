<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAvailableModelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAvailableModelsResponseBody\items\gpuRequired;

class items extends Model
{
    /**
     * @var gpuRequired[]
     */
    public $gpuRequired;

    /**
     * @var int
     */
    public $minimumCpu;

    /**
     * @var int
     */
    public $minimumMemory;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelSeries;

    /**
     * @var string[]
     */
    public $supportedGpuModels;
    protected $_name = [
        'gpuRequired' => 'GpuRequired',
        'minimumCpu' => 'MinimumCpu',
        'minimumMemory' => 'MinimumMemory',
        'modelName' => 'ModelName',
        'modelSeries' => 'ModelSeries',
        'supportedGpuModels' => 'SupportedGpuModels',
    ];

    public function validate()
    {
        if (\is_array($this->gpuRequired)) {
            Model::validateArray($this->gpuRequired);
        }
        if (\is_array($this->supportedGpuModels)) {
            Model::validateArray($this->supportedGpuModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gpuRequired) {
            if (\is_array($this->gpuRequired)) {
                $res['GpuRequired'] = [];
                $n1 = 0;
                foreach ($this->gpuRequired as $item1) {
                    $res['GpuRequired'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->minimumCpu) {
            $res['MinimumCpu'] = $this->minimumCpu;
        }

        if (null !== $this->minimumMemory) {
            $res['MinimumMemory'] = $this->minimumMemory;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelSeries) {
            $res['ModelSeries'] = $this->modelSeries;
        }

        if (null !== $this->supportedGpuModels) {
            if (\is_array($this->supportedGpuModels)) {
                $res['SupportedGpuModels'] = [];
                $n1 = 0;
                foreach ($this->supportedGpuModels as $item1) {
                    $res['SupportedGpuModels'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['GpuRequired'])) {
            if (!empty($map['GpuRequired'])) {
                $model->gpuRequired = [];
                $n1 = 0;
                foreach ($map['GpuRequired'] as $item1) {
                    $model->gpuRequired[$n1] = gpuRequired::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MinimumCpu'])) {
            $model->minimumCpu = $map['MinimumCpu'];
        }

        if (isset($map['MinimumMemory'])) {
            $model->minimumMemory = $map['MinimumMemory'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelSeries'])) {
            $model->modelSeries = $map['ModelSeries'];
        }

        if (isset($map['SupportedGpuModels'])) {
            if (!empty($map['SupportedGpuModels'])) {
                $model->supportedGpuModels = [];
                $n1 = 0;
                foreach ($map['SupportedGpuModels'] as $item1) {
                    $model->supportedGpuModels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
