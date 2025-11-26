<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponseBody\images;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponseBody\images\image\diskDeviceMappings;

class image extends Model
{
    /**
     * @var string
     */
    public $computeType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var diskDeviceMappings
     */
    public $diskDeviceMappings;

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

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'computeType' => 'ComputeType',
        'description' => 'Description',
        'diskDeviceMappings' => 'DiskDeviceMappings',
        'imageId' => 'ImageId',
        'imageSize' => 'ImageSize',
        'imageVersion' => 'ImageVersion',
        'OSName' => 'OSName',
        'OSType' => 'OSType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->diskDeviceMappings) {
            $this->diskDeviceMappings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeType) {
            $res['ComputeType'] = $this->computeType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = null !== $this->diskDeviceMappings ? $this->diskDeviceMappings->toArray($noStream) : $this->diskDeviceMappings;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ComputeType'])) {
            $model->computeType = $map['ComputeType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskDeviceMappings'])) {
            $model->diskDeviceMappings = diskDeviceMappings::fromMap($map['DiskDeviceMappings']);
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
