<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest;

use AlibabaCloud\Tea\Model;

class artifactBuildProperty extends Model
{
    /**
     * @description The command content.
     *
     * >  This parameter is available only if the deployment package is a ecs image type.
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
     * @example RunShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @description The region ID where the source mirror image is located.
     *
     * >  This parameter is available only if the deployment package is a ecs image type.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source image id. Supported Types:
     *
     * >  This parameter is available only if the deployment package is a ecs image type.
     * @example Image ID：m-t4nhenrdc38pe4*****
     * OOS Common Parameter Name：aliyun/services/computenest/images/aliyun_3_2104_python_3_11
     * @var string
     */
    public $sourceImageId;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'commandType'    => 'CommandType',
        'regionId'       => 'RegionId',
        'sourceImageId'  => 'SourceImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceImageId'])) {
            $model->sourceImageId = $map['SourceImageId'];
        }

        return $model;
    }
}
