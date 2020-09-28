<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataResponse\body;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description 镜像ID。
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 镜像名称。
     *
     * @var string
     */
    public $imageName;

    /**
     * @description 镜像类型。
     *
     * @var string
     */
    public $imageType;

    /**
     * @description 操作系统发行版本号。
     *
     * @var string
     */
    public $osType;

    /**
     * @description 操作系统平台类型。取值范围： Windows, Linux（默认）
     *
     * @var string
     */
    public $osVersion;

    /**
     * @description 操作系统发行版。取值范围： CentOS,AliyunLinux,Windows,WindowsCore。
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'imageId'   => 'image_id',
        'imageName' => 'image_name',
        'imageType' => 'image_type',
        'osType'    => 'os_type',
        'osVersion' => 'os_version',
        'platform'  => 'platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['image_name'] = $this->imageName;
        }
        if (null !== $this->imageType) {
            $res['image_type'] = $this->imageType;
        }
        if (null !== $this->osType) {
            $res['os_type'] = $this->osType;
        }
        if (null !== $this->osVersion) {
            $res['os_version'] = $this->osVersion;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['image_name'])) {
            $model->imageName = $map['image_name'];
        }
        if (isset($map['image_type'])) {
            $model->imageType = $map['image_type'];
        }
        if (isset($map['os_type'])) {
            $model->osType = $map['os_type'];
        }
        if (isset($map['os_version'])) {
            $model->osVersion = $map['os_version'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        return $model;
    }
}
