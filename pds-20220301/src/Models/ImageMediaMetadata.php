<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ImageMediaMetadata extends Model
{
    /**
     * @example 浙江省杭州市滨江区西兴街道江陵路
     *
     * @var string
     */
    public $addressLine;

    /**
     * @example 杭州市
     *
     * @var string
     */
    public $city;

    /**
     * @example 中国
     *
     * @var string
     */
    public $country;

    /**
     * @example 滨江区
     *
     * @var string
     */
    public $district;

    /**
     * @example {"Compression":{"value":"6"},"DateTime":{"value":"2020:08:19 17:11:11"}}
     *
     * @var string
     */
    public $exif;

    /**
     * @var FaceThumbnail[]
     */
    public $facesThumbnail;

    /**
     * @example 1080
     *
     * @var int
     */
    public $height;

    /**
     * @var ImageQuality
     */
    public $imageQuality;

    /**
     * @var SystemTag[]
     */
    public $imageTags;

    /**
     * @example 30.185453,120.218522
     *
     * @var string
     */
    public $location;

    /**
     * @example 浙江省
     *
     * @var string
     */
    public $province;

    /**
     * @example 2006-01-02T15:04:05.000Z07:00
     *
     * @var string
     */
    public $time;

    /**
     * @example 西兴街道
     *
     * @var string
     */
    public $township;

    /**
     * @example 1920
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'addressLine'    => 'address_line',
        'city'           => 'city',
        'country'        => 'country',
        'district'       => 'district',
        'exif'           => 'exif',
        'facesThumbnail' => 'faces_thumbnail',
        'height'         => 'height',
        'imageQuality'   => 'image_quality',
        'imageTags'      => 'image_tags',
        'location'       => 'location',
        'province'       => 'province',
        'time'           => 'time',
        'township'       => 'township',
        'width'          => 'width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressLine) {
            $res['address_line'] = $this->addressLine;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->country) {
            $res['country'] = $this->country;
        }
        if (null !== $this->district) {
            $res['district'] = $this->district;
        }
        if (null !== $this->exif) {
            $res['exif'] = $this->exif;
        }
        if (null !== $this->facesThumbnail) {
            $res['faces_thumbnail'] = [];
            if (null !== $this->facesThumbnail && \is_array($this->facesThumbnail)) {
                $n = 0;
                foreach ($this->facesThumbnail as $item) {
                    $res['faces_thumbnail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }
        if (null !== $this->imageQuality) {
            $res['image_quality'] = null !== $this->imageQuality ? $this->imageQuality->toMap() : null;
        }
        if (null !== $this->imageTags) {
            $res['image_tags'] = [];
            if (null !== $this->imageTags && \is_array($this->imageTags)) {
                $n = 0;
                foreach ($this->imageTags as $item) {
                    $res['image_tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->province) {
            $res['province'] = $this->province;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->township) {
            $res['township'] = $this->township;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageMediaMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address_line'])) {
            $model->addressLine = $map['address_line'];
        }
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['country'])) {
            $model->country = $map['country'];
        }
        if (isset($map['district'])) {
            $model->district = $map['district'];
        }
        if (isset($map['exif'])) {
            $model->exif = $map['exif'];
        }
        if (isset($map['faces_thumbnail'])) {
            if (!empty($map['faces_thumbnail'])) {
                $model->facesThumbnail = [];
                $n                     = 0;
                foreach ($map['faces_thumbnail'] as $item) {
                    $model->facesThumbnail[$n++] = null !== $item ? FaceThumbnail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['image_quality'])) {
            $model->imageQuality = ImageQuality::fromMap($map['image_quality']);
        }
        if (isset($map['image_tags'])) {
            if (!empty($map['image_tags'])) {
                $model->imageTags = [];
                $n                = 0;
                foreach ($map['image_tags'] as $item) {
                    $model->imageTags[$n++] = null !== $item ? SystemTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['province'])) {
            $model->province = $map['province'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['township'])) {
            $model->township = $map['township'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
