<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListImagesResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description The description of the image.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the image.
     *
     * @example 794c230fd3e64ea19f83f4d7a0ad****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
     *
     * @example WordPress-4.8.1
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The type of the image. Valid values:
     *
     *   system
     *   app
     *   custom
     *
     * @example app
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The operating system type of the image. Valid values:
     *
     *   Linux
     *   Windows
     *
     * @example Linux
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'description' => 'Description',
        'imageId'     => 'ImageId',
        'imageName'   => 'ImageName',
        'imageType'   => 'ImageType',
        'platform'    => 'Platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        return $model;
    }
}
