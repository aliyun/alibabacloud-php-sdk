<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\SearchImagesRequest\attribute;
use AlibabaCloud\Tea\Model;

class SearchImagesRequest extends Model
{
    /**
     * @var int
     */
    public $from;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $contents;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $imageIds;

    /**
     * @var string
     */
    public $cameraIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $noFeature;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var attribute[]
     */
    public $attribute;
    protected $_name = [
        'from'       => 'From',
        'size'       => 'Size',
        'type'       => 'Type',
        'contents'   => 'Contents',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'imageIds'   => 'ImageIds',
        'cameraIds'  => 'CameraIds',
        'instanceId' => 'InstanceId',
        'noFeature'  => 'NoFeature',
        'regionId'   => 'RegionId',
        'attribute'  => 'Attribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->contents) {
            $res['Contents'] = $this->contents;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->imageIds) {
            $res['ImageIds'] = $this->imageIds;
        }
        if (null !== $this->cameraIds) {
            $res['CameraIds'] = $this->cameraIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->noFeature) {
            $res['NoFeature'] = $this->noFeature;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->attribute) {
            $res['Attribute'] = [];
            if (null !== $this->attribute && \is_array($this->attribute)) {
                $n = 0;
                foreach ($this->attribute as $item) {
                    $res['Attribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Contents'])) {
            $model->contents = $map['Contents'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ImageIds'])) {
            $model->imageIds = $map['ImageIds'];
        }
        if (isset($map['CameraIds'])) {
            $model->cameraIds = $map['CameraIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NoFeature'])) {
            $model->noFeature = $map['NoFeature'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Attribute'])) {
            if (!empty($map['Attribute'])) {
                $model->attribute = [];
                $n                = 0;
                foreach ($map['Attribute'] as $item) {
                    $model->attribute[$n++] = null !== $item ? attribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
