<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class ListImagesRequest extends Model
{
    /**
     * @description The IDs of the images. The value can be a JSON array that consists of up to 50 image IDs, in the format of `["xxx", "yyy", … "zzz"]`. Separate the image IDs with commas (,).
     *
     * @example ["fe9c66133a9d4688872869726b52****", "794c230fd3e64ea19f83f4d7a0ad****"]
     *
     * @var string
     */
    public $imageIds;

    /**
     * @description The type of the image. Valid values:
     *
     *   system
     *   app
     *   custom
     *
     * @example system
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The region ID of the images. You can call the [ListRegions](~~189315~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'imageIds'  => 'ImageIds',
        'imageType' => 'ImageType',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageIds) {
            $res['ImageIds'] = $this->imageIds;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageIds'])) {
            $model->imageIds = $map['ImageIds'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
