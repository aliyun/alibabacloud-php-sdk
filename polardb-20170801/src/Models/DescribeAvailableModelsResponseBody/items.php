<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAvailableModelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAvailableModelsResponseBody\items\gpuRequired;

class items extends Model
{
    /**
     * @var string[]
     */
    public $containerEnv;

    /**
     * @var string
     */
    public $customImageSource;

    /**
     * @var string
     */
    public $customModelName;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $directCommand;

    /**
     * @var string
     */
    public $displayModelName;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var gpuRequired[]
     */
    public $gpuRequired;

    /**
     * @var string
     */
    public $imageImportStatus;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $inferenceEngine;

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
     * @var string[]
     */
    public $modelParams;

    /**
     * @var string
     */
    public $modelSeries;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string[]
     */
    public $supportedGpuModels;

    /**
     * @var string
     */
    public $tuneArch;
    protected $_name = [
        'containerEnv' => 'ContainerEnv',
        'customImageSource' => 'CustomImageSource',
        'customModelName' => 'CustomModelName',
        'DBInstanceClass' => 'DBInstanceClass',
        'directCommand' => 'DirectCommand',
        'displayModelName' => 'DisplayModelName',
        'gmtModified' => 'GmtModified',
        'gpuRequired' => 'GpuRequired',
        'imageImportStatus' => 'ImageImportStatus',
        'imageName' => 'ImageName',
        'inferenceEngine' => 'InferenceEngine',
        'minimumCpu' => 'MinimumCpu',
        'minimumMemory' => 'MinimumMemory',
        'modelName' => 'ModelName',
        'modelParams' => 'ModelParams',
        'modelSeries' => 'ModelSeries',
        'modelType' => 'ModelType',
        'ossPath' => 'OssPath',
        'supportedGpuModels' => 'SupportedGpuModels',
        'tuneArch' => 'TuneArch',
    ];

    public function validate()
    {
        if (\is_array($this->containerEnv)) {
            Model::validateArray($this->containerEnv);
        }
        if (\is_array($this->gpuRequired)) {
            Model::validateArray($this->gpuRequired);
        }
        if (\is_array($this->modelParams)) {
            Model::validateArray($this->modelParams);
        }
        if (\is_array($this->supportedGpuModels)) {
            Model::validateArray($this->supportedGpuModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerEnv) {
            if (\is_array($this->containerEnv)) {
                $res['ContainerEnv'] = [];
                foreach ($this->containerEnv as $key1 => $value1) {
                    $res['ContainerEnv'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->customImageSource) {
            $res['CustomImageSource'] = $this->customImageSource;
        }

        if (null !== $this->customModelName) {
            $res['CustomModelName'] = $this->customModelName;
        }

        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }

        if (null !== $this->directCommand) {
            $res['DirectCommand'] = $this->directCommand;
        }

        if (null !== $this->displayModelName) {
            $res['DisplayModelName'] = $this->displayModelName;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

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

        if (null !== $this->imageImportStatus) {
            $res['ImageImportStatus'] = $this->imageImportStatus;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->inferenceEngine) {
            $res['InferenceEngine'] = $this->inferenceEngine;
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

        if (null !== $this->modelParams) {
            if (\is_array($this->modelParams)) {
                $res['ModelParams'] = [];
                foreach ($this->modelParams as $key1 => $value1) {
                    $res['ModelParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->modelSeries) {
            $res['ModelSeries'] = $this->modelSeries;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
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

        if (null !== $this->tuneArch) {
            $res['TuneArch'] = $this->tuneArch;
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
        if (isset($map['ContainerEnv'])) {
            if (!empty($map['ContainerEnv'])) {
                $model->containerEnv = [];
                foreach ($map['ContainerEnv'] as $key1 => $value1) {
                    $model->containerEnv[$key1] = $value1;
                }
            }
        }

        if (isset($map['CustomImageSource'])) {
            $model->customImageSource = $map['CustomImageSource'];
        }

        if (isset($map['CustomModelName'])) {
            $model->customModelName = $map['CustomModelName'];
        }

        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }

        if (isset($map['DirectCommand'])) {
            $model->directCommand = $map['DirectCommand'];
        }

        if (isset($map['DisplayModelName'])) {
            $model->displayModelName = $map['DisplayModelName'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

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

        if (isset($map['ImageImportStatus'])) {
            $model->imageImportStatus = $map['ImageImportStatus'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['InferenceEngine'])) {
            $model->inferenceEngine = $map['InferenceEngine'];
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

        if (isset($map['ModelParams'])) {
            if (!empty($map['ModelParams'])) {
                $model->modelParams = [];
                foreach ($map['ModelParams'] as $key1 => $value1) {
                    $model->modelParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['ModelSeries'])) {
            $model->modelSeries = $map['ModelSeries'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
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

        if (isset($map['TuneArch'])) {
            $model->tuneArch = $map['TuneArch'];
        }

        return $model;
    }
}
