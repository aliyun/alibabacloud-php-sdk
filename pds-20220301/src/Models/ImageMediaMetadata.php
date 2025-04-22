<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ImageMediaMetadata extends Model
{
    /**
     * @var string
     */
    public $addressLine;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $exif;

    /**
     * @var FaceThumbnail[]
     */
    public $facesThumbnail;

    /**
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
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $township;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'addressLine' => 'address_line',
        'city' => 'city',
        'country' => 'country',
        'district' => 'district',
        'exif' => 'exif',
        'facesThumbnail' => 'faces_thumbnail',
        'height' => 'height',
        'imageQuality' => 'image_quality',
        'imageTags' => 'image_tags',
        'location' => 'location',
        'province' => 'province',
        'time' => 'time',
        'township' => 'township',
        'width' => 'width',
    ];

    public function validate()
    {
        if (\is_array($this->facesThumbnail)) {
            Model::validateArray($this->facesThumbnail);
        }
        if (null !== $this->imageQuality) {
            $this->imageQuality->validate();
        }
        if (\is_array($this->imageTags)) {
            Model::validateArray($this->imageTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->facesThumbnail)) {
                $res['faces_thumbnail'] = [];
                $n1 = 0;
                foreach ($this->facesThumbnail as $item1) {
                    $res['faces_thumbnail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        if (null !== $this->imageQuality) {
            $res['image_quality'] = null !== $this->imageQuality ? $this->imageQuality->toArray($noStream) : $this->imageQuality;
        }

        if (null !== $this->imageTags) {
            if (\is_array($this->imageTags)) {
                $res['image_tags'] = [];
                $n1 = 0;
                foreach ($this->imageTags as $item1) {
                    $res['image_tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['faces_thumbnail'] as $item1) {
                    $model->facesThumbnail[$n1++] = FaceThumbnail::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['image_tags'] as $item1) {
                    $model->imageTags[$n1++] = SystemTag::fromMap($item1);
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
