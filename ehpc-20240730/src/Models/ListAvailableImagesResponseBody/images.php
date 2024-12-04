<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description The OS architecture of the image. Valid values:
     *
     *   x86_64
     *   arm64
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The boot mode of the image. Valid values:
     *
     *   BIOS: Basic Input/Output System (BIOS).
     *   UEFI: Unified Extensible Firmware Interface (UEFI).
     *
     * >  When you change the OS boot mode of an instance, you must make sure that the boot mode matches the boot mode of the associated image. Otherwise, the instance fails to be booted.
     * @example BIOS
     *
     * @var string
     */
    public $bootMode;

    /**
     * @description The image description.
     *
     * @example ExampleDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The image ID.
     *
     * @example centos_7_06_64_20G_alibase_2019071****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image name.
     *
     * @example CHESS5V5.0.27
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The image source. Valid values:
     *
     *   system: system image.
     *   self: custom image.
     *   others: shared image.
     *
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The OS name in Chinese.
     *
     * @var string
     */
    public $OSName;

    /**
     * @description The OS name in English.
     *
     * @example CentOS  7.9 64 bit
     *
     * @var string
     */
    public $OSNameEn;

    /**
     * @description The OS. Valid values:
     *
     *   CentOS
     *   windows
     *
     * @example windows
     *
     * @var string
     */
    public $platform;

    /**
     * @description The image size. Unit: GiB
     *
     * @example 40
     *
     * @var string
     */
    public $size;
    protected $_name = [
        'architecture'    => 'Architecture',
        'bootMode'        => 'BootMode',
        'description'     => 'Description',
        'imageId'         => 'ImageId',
        'imageName'       => 'ImageName',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'OSName'          => 'OSName',
        'OSNameEn'        => 'OSNameEn',
        'platform'        => 'Platform',
        'size'            => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->bootMode) {
            $res['BootMode'] = $this->bootMode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->OSNameEn) {
            $res['OSNameEn'] = $this->OSNameEn;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['BootMode'])) {
            $model->bootMode = $map['BootMode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['OSNameEn'])) {
            $model->OSNameEn = $map['OSNameEn'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
