<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CopyImageRequest extends Model
{
    /**
     * @var string
     */
    public $destinationDescription;

    /**
     * @var string
     */
    public $destinationImageName;

    /**
     * @var string
     */
    public $destinationRegionId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'destinationDescription' => 'DestinationDescription',
        'destinationImageName'   => 'DestinationImageName',
        'destinationRegionId'    => 'DestinationRegionId',
        'imageId'                => 'ImageId',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationDescription) {
            $res['DestinationDescription'] = $this->destinationDescription;
        }
        if (null !== $this->destinationImageName) {
            $res['DestinationImageName'] = $this->destinationImageName;
        }
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationDescription'])) {
            $model->destinationDescription = $map['DestinationDescription'];
        }
        if (isset($map['DestinationImageName'])) {
            $model->destinationImageName = $map['DestinationImageName'];
        }
        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
