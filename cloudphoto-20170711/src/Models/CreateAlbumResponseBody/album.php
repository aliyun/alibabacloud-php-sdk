<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreateAlbumResponseBody;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\CreateAlbumResponseBody\album\cover;
use AlibabaCloud\Tea\Model;

class album extends Model
{
    /**
     * @var string
     */
    public $idStr;

    /**
     * @var int
     */
    public $photosCount;

    /**
     * @var cover
     */
    public $cover;

    /**
     * @var int
     */
    public $mtime;

    /**
     * @var int
     */
    public $ctime;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'idStr'       => 'IdStr',
        'photosCount' => 'PhotosCount',
        'cover'       => 'Cover',
        'mtime'       => 'Mtime',
        'ctime'       => 'Ctime',
        'remark'      => 'Remark',
        'state'       => 'State',
        'name'        => 'Name',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idStr) {
            $res['IdStr'] = $this->idStr;
        }
        if (null !== $this->photosCount) {
            $res['PhotosCount'] = $this->photosCount;
        }
        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toMap() : null;
        }
        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return album
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdStr'])) {
            $model->idStr = $map['IdStr'];
        }
        if (isset($map['PhotosCount'])) {
            $model->photosCount = $map['PhotosCount'];
        }
        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }
        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
