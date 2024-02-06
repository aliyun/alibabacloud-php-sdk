<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponseBody\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The computing type of the image. Valid values:
     *
     *   ens_vm: x86 computing.
     *   arm_vm: ARM computing.
     *   bare_metal: x86 bare machine.
     *   pcfarm: heterogeneous computing.
     *
     * @example ens_vm
     *
     * @var string
     */
    public $computeType;

    /**
     * @description The description of the image.
     *
     * @example centos_6_08_64_20G_alibase_2017****
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the image.
     *
     * @example centos_6_08_64_20G_alibase_2017****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The size of the image. Unit: GiB.
     *
     * @example 20
     *
     * @var string
     */
    public $imageSize;

    /**
     * @description The version of the image.
     *
     * @example 6.8
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description The type of the image. Valid values: **centos**, **debian**, **ubuntu**, and **windows**.
     *
     * @example centos
     *
     * @var string
     */
    public $OSName;

    /**
     * @description The type of the operating system.
     *
     * @example linux
     *
     * @var string
     */
    public $OSType;
    protected $_name = [
        'computeType'  => 'ComputeType',
        'description'  => 'Description',
        'imageId'      => 'ImageId',
        'imageSize'    => 'ImageSize',
        'imageVersion' => 'ImageVersion',
        'OSName'       => 'OSName',
        'OSType'       => 'OSType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeType) {
            $res['ComputeType'] = $this->computeType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeType'])) {
            $model->computeType = $map['ComputeType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }

        return $model;
    }
}
