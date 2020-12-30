<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class RegisterPhotoRequest extends Model
{
    /**
     * @var int
     */
    public $takenAt;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $isVideo;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $photoTitle;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'takenAt'    => 'TakenAt',
        'location'   => 'Location',
        'storeName'  => 'StoreName',
        'libraryId'  => 'LibraryId',
        'latitude'   => 'Latitude',
        'longitude'  => 'Longitude',
        'width'      => 'Width',
        'height'     => 'Height',
        'isVideo'    => 'IsVideo',
        'md5'        => 'Md5',
        'size'       => 'Size',
        'photoTitle' => 'PhotoTitle',
        'remark'     => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->takenAt) {
            $res['TakenAt'] = $this->takenAt;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->libraryId) {
            $res['LibraryId'] = $this->libraryId;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->isVideo) {
            $res['IsVideo'] = $this->isVideo;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->photoTitle) {
            $res['PhotoTitle'] = $this->photoTitle;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterPhotoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TakenAt'])) {
            $model->takenAt = $map['TakenAt'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['LibraryId'])) {
            $model->libraryId = $map['LibraryId'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['IsVideo'])) {
            $model->isVideo = $map['IsVideo'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['PhotoTitle'])) {
            $model->photoTitle = $map['PhotoTitle'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
