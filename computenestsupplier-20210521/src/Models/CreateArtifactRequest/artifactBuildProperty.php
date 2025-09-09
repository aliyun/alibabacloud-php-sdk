<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\artifactBuildProperty\buildArgs;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\artifactBuildProperty\codeRepo;

class artifactBuildProperty extends Model
{
    /**
     * @var buildArgs[]
     */
    public $buildArgs;

    /**
     * @var codeRepo
     */
    public $codeRepo;

    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $commandType;

    /**
     * @var string
     */
    public $dockerfilePath;

    /**
     * @var bool
     */
    public $enableGpu;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceContainerImage;

    /**
     * @var string
     */
    public $sourceImageId;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'buildArgs' => 'BuildArgs',
        'codeRepo' => 'CodeRepo',
        'commandContent' => 'CommandContent',
        'commandType' => 'CommandType',
        'dockerfilePath' => 'DockerfilePath',
        'enableGpu' => 'EnableGpu',
        'regionId' => 'RegionId',
        'sourceContainerImage' => 'SourceContainerImage',
        'sourceImageId' => 'SourceImageId',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        if (\is_array($this->buildArgs)) {
            Model::validateArray($this->buildArgs);
        }
        if (null !== $this->codeRepo) {
            $this->codeRepo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildArgs) {
            if (\is_array($this->buildArgs)) {
                $res['BuildArgs'] = [];
                $n1 = 0;
                foreach ($this->buildArgs as $item1) {
                    $res['BuildArgs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->codeRepo) {
            $res['CodeRepo'] = null !== $this->codeRepo ? $this->codeRepo->toArray($noStream) : $this->codeRepo;
        }

        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }

        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }

        if (null !== $this->dockerfilePath) {
            $res['DockerfilePath'] = $this->dockerfilePath;
        }

        if (null !== $this->enableGpu) {
            $res['EnableGpu'] = $this->enableGpu;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourceContainerImage) {
            $res['SourceContainerImage'] = $this->sourceContainerImage;
        }

        if (null !== $this->sourceImageId) {
            $res['SourceImageId'] = $this->sourceImageId;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['BuildArgs'])) {
            if (!empty($map['BuildArgs'])) {
                $model->buildArgs = [];
                $n1 = 0;
                foreach ($map['BuildArgs'] as $item1) {
                    $model->buildArgs[$n1] = buildArgs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CodeRepo'])) {
            $model->codeRepo = codeRepo::fromMap($map['CodeRepo']);
        }

        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }

        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }

        if (isset($map['DockerfilePath'])) {
            $model->dockerfilePath = $map['DockerfilePath'];
        }

        if (isset($map['EnableGpu'])) {
            $model->enableGpu = $map['EnableGpu'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourceContainerImage'])) {
            $model->sourceContainerImage = $map['SourceContainerImage'];
        }

        if (isset($map['SourceImageId'])) {
            $model->sourceImageId = $map['SourceImageId'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
