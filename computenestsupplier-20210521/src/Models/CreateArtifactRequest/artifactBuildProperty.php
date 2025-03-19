<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\artifactBuildProperty\buildArgs;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateArtifactRequest\artifactBuildProperty\codeRepo;
use AlibabaCloud\Tea\Model;

class artifactBuildProperty extends Model
{
    /**
     * @description The build arguments used during the image build process.
     *
     * >  This parameter is available only if the ArtifactBuildType is Dockerfile type.
     *
     * @var buildArgs[]
     */
    public $buildArgs;

    /**
     * @description The address of the code repository.
     *
     * >  This parameter is available only if the ArtifactBuildType is Dockerfile or Buildpacks type.
     *
     * @var codeRepo
     */
    public $codeRepo;

    /**
     * @description The command content.
     *
     * >  This parameter is available only if the deployment package is a ecs image type.
     *
     * @example echo "start run command"
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The command type. Valid values:
     *
     *   RunBatScript: batch command, applicable to Windows instances.
     *   RunPowerShellScript: PowerShell command, applicable to Windows instances.
     *   RunShellScript: shell command, applicable to Linux instances.
     *
     * >  This parameter is available only if the deployment package is a ecs image type.
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @description The relative path to the Dockerfile within the code repository.
     *
     * >  This parameter is available only if the ArtifactBuildType is Dockerfile type.
     *
     * @example ./file/Dockerfile
     *
     * @var string
     */
    public $dockerfilePath;

    /**
     * @description The region ID where the source mirror image is located.
     *
     * >  This parameter is available only if the deployment package is a ecs image type.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The pull location of the source container image. This is used for the command docker pull ${SourceContainerImage}.
     *
     * >  This parameter is available only if the ArtifactBuildType is ContainerImage type.
     *
     * @example pytorch/pytorch:2.5.1-cuda12.4-cudnn9-devel
     *
     * @var string
     */
    public $sourceContainerImage;

    /**
     * @description The source image id. Supported Types:
     *
     * - Image ID: Pass the Image ID of the Ecs image directly.
     *
     * - OOS Common Parameter Name: Obtain the corresponding Image ID automatically by using the OOS common parameter name.
     *
     * >  This parameter is available only if the deployment package is a ecs image type.
     *
     * @example Image ID：m-t4nhenrdc38pe4*****
     * ubuntu_22_04_x64_20G_alibase_20240926.vhd
     * OOS Common Parameter Name：aliyun/services/computenest/images/aliyun_3_2104_python_3_11
     *
     * @var string
     */
    public $sourceImageId;
    protected $_name = [
        'buildArgs' => 'BuildArgs',
        'codeRepo' => 'CodeRepo',
        'commandContent' => 'CommandContent',
        'commandType' => 'CommandType',
        'dockerfilePath' => 'DockerfilePath',
        'regionId' => 'RegionId',
        'sourceContainerImage' => 'SourceContainerImage',
        'sourceImageId' => 'SourceImageId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildArgs) {
            $res['BuildArgs'] = [];
            if (null !== $this->buildArgs && \is_array($this->buildArgs)) {
                $n = 0;
                foreach ($this->buildArgs as $item) {
                    $res['BuildArgs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->codeRepo) {
            $res['CodeRepo'] = null !== $this->codeRepo ? $this->codeRepo->toMap() : null;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceContainerImage) {
            $res['SourceContainerImage'] = $this->sourceContainerImage;
        }
        if (null !== $this->sourceImageId) {
            $res['SourceImageId'] = $this->sourceImageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return artifactBuildProperty
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildArgs'])) {
            if (!empty($map['BuildArgs'])) {
                $model->buildArgs = [];
                $n = 0;
                foreach ($map['BuildArgs'] as $item) {
                    $model->buildArgs[$n++] = null !== $item ? buildArgs::fromMap($item) : $item;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceContainerImage'])) {
            $model->sourceContainerImage = $map['SourceContainerImage'];
        }
        if (isset($map['SourceImageId'])) {
            $model->sourceImageId = $map['SourceImageId'];
        }

        return $model;
    }
}
