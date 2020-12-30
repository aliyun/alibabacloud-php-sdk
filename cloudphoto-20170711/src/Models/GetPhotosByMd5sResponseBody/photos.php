<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\GetPhotosByMd5sResponseBody;

use AlibabaCloud\Tea\Model;

class photos extends Model
{
    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $takenAt;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $shareExpireTime;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $idStr;

    /**
     * @var int
     */
    public $ctime;

    /**
     * @var int
     */
    public $mtime;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $title;

    /**
     * @var bool
     */
    public $isVideo;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'remark'          => 'Remark',
        'takenAt'         => 'TakenAt',
        'state'           => 'State',
        'height'          => 'Height',
        'shareExpireTime' => 'ShareExpireTime',
        'fileId'          => 'FileId',
        'idStr'           => 'IdStr',
        'ctime'           => 'Ctime',
        'mtime'           => 'Mtime',
        'width'           => 'Width',
        'size'            => 'Size',
        'md5'             => 'Md5',
        'title'           => 'Title',
        'isVideo'         => 'IsVideo',
        'id'              => 'Id',
        'location'        => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->takenAt) {
            $res['TakenAt'] = $this->takenAt;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->shareExpireTime) {
            $res['ShareExpireTime'] = $this->shareExpireTime;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->idStr) {
            $res['IdStr'] = $this->idStr;
        }
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }
        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->isVideo) {
            $res['IsVideo'] = $this->isVideo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return photos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['TakenAt'])) {
            $model->takenAt = $map['TakenAt'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ShareExpireTime'])) {
            $model->shareExpireTime = $map['ShareExpireTime'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['IdStr'])) {
            $model->idStr = $map['IdStr'];
        }
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }
        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['IsVideo'])) {
            $model->isVideo = $map['IsVideo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
