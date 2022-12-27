<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponseBody\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @example centos_6_08_64_20G_alibase_2017****
     *
     * @var string
     */
    public $description;

    /**
     * @example centos_6_08_64_20G_alibase_2017****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example 20
     *
     * @var string
     */
    public $imageSize;

    /**
     * @example 6.8
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @example centos
     *
     * @var string
     */
    public $OSName;

    /**
     * @example linux
     *
     * @var string
     */
    public $OSType;
    protected $_name = [
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
