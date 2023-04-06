<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

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
     * @example 40.121,105.2121
     *
     * @var string
     */
    public $brGeoPoint;

    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example image/resize,w_200
     *
     * @var string
     */
    public $imageThumbnailProcess;

    /**
     * @example 39.121,101.2121
     *
     * @var string
     */
    public $tlGeoPoint;

    /**
     * @example video/snapshot,t_7000,f_jpg,w_800,h_600,m_fast
     *
     * @var string
     */
    public $videoThumbnailProcess;
    protected $_name = [
        'addressLevel'          => 'address_level',
        'addressNames'          => 'address_names',
        'brGeoPoint'            => 'br_geo_point',
        'driveId'               => 'drive_id',
        'imageThumbnailProcess' => 'image_thumbnail_process',
        'tlGeoPoint'            => 'tl_geo_point',
        'videoThumbnailProcess' => 'video_thumbnail_process',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressLevel) {
            $res['address_level'] = $this->addressLevel;
        }
        if (null !== $this->addressNames) {
            $res['address_names'] = $this->addressNames;
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

    /**
     * @param array $map
     *
     * @return SearchAddressGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address_level'])) {
            $model->addressLevel = $map['address_level'];
        }
        if (isset($map['address_names'])) {
            if (!empty($map['address_names'])) {
                $model->addressNames = $map['address_names'];
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
