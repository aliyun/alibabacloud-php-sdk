<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListFacesResponseBody\faces;

use AlibabaCloud\Tea\Model;

class cover extends Model
{
    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $height;

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
    public $mtime;

    /**
     * @var int
     */
    public $ctime;

    /**
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var bool
     */
    public $isVideo;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'remark'  => 'Remark',
        'state'   => 'State',
        'height'  => 'Height',
        'fileId'  => 'FileId',
        'idStr'   => 'IdStr',
        'mtime'   => 'Mtime',
        'ctime'   => 'Ctime',
        'width'   => 'Width',
        'md5'     => 'Md5',
        'isVideo' => 'IsVideo',
        'title'   => 'Title',
        'id'      => 'Id',
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->idStr) {
            $res['IdStr'] = $this->idStr;
        }
        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->isVideo) {
            $res['IsVideo'] = $this->isVideo;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cover
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['IdStr'])) {
            $model->idStr = $map['IdStr'];
        }
        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['IsVideo'])) {
            $model->isVideo = $map['IsVideo'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
