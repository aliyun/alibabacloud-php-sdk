<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class SearchAddressGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $addressLevel;

    /**
     * @var string[]
     */
    public $addressNames;

    /**
     * @var string
     */
    public $brGeoPoint;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $imageThumbnailProcess;

    /**
     * @var string
     */
    public $tlGeoPoint;

    /**
     * @var string
     */
    public $videoThumbnailProcess;
    protected $_name = [
        'addressLevel' => 'address_level',
        'addressNames' => 'address_names',
        'brGeoPoint' => 'br_geo_point',
        'driveId' => 'drive_id',
        'imageThumbnailProcess' => 'image_thumbnail_process',
        'tlGeoPoint' => 'tl_geo_point',
        'videoThumbnailProcess' => 'video_thumbnail_process',
    ];

    public function validate()
    {
        if (\is_array($this->addressNames)) {
            Model::validateArray($this->addressNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressLevel) {
            $res['address_level'] = $this->addressLevel;
        }

        if (null !== $this->addressNames) {
            if (\is_array($this->addressNames)) {
                $res['address_names'] = [];
                $n1 = 0;
                foreach ($this->addressNames as $item1) {
                    $res['address_names'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->brGeoPoint) {
            $res['br_geo_point'] = $this->brGeoPoint;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->imageThumbnailProcess) {
            $res['image_thumbnail_process'] = $this->imageThumbnailProcess;
        }

        if (null !== $this->tlGeoPoint) {
            $res['tl_geo_point'] = $this->tlGeoPoint;
        }

        if (null !== $this->videoThumbnailProcess) {
            $res['video_thumbnail_process'] = $this->videoThumbnailProcess;
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
        if (isset($map['address_level'])) {
            $model->addressLevel = $map['address_level'];
        }

        if (isset($map['address_names'])) {
            if (!empty($map['address_names'])) {
                $model->addressNames = [];
                $n1 = 0;
                foreach ($map['address_names'] as $item1) {
                    $model->addressNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['br_geo_point'])) {
            $model->brGeoPoint = $map['br_geo_point'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['image_thumbnail_process'])) {
            $model->imageThumbnailProcess = $map['image_thumbnail_process'];
        }

        if (isset($map['tl_geo_point'])) {
            $model->tlGeoPoint = $map['tl_geo_point'];
        }

        if (isset($map['video_thumbnail_process'])) {
            $model->videoThumbnailProcess = $map['video_thumbnail_process'];
        }

        return $model;
    }
}
