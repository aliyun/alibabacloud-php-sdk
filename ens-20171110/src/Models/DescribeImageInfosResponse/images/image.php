<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponse\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var string
     */
    public $OSName;

    /**
     * @var string
     */
    public $imageSize;
    protected $_name = [
        'imageId'      => 'ImageId',
        'description'  => 'Description',
        'imageVersion' => 'ImageVersion',
        'OSType'       => 'OSType',
        'OSName'       => 'OSName',
        'imageSize'    => 'ImageSize',
    ];

    public function validate()
    {
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('imageVersion', $this->imageVersion, true);
        Model::validateRequired('OSType', $this->OSType, true);
        Model::validateRequired('OSName', $this->OSName, true);
        Model::validateRequired('imageSize', $this->imageSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }

        return $model;
    }
}
