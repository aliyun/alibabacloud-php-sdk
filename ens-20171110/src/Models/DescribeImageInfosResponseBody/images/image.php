<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponseBody\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageSize;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $OSName;

    /**
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
