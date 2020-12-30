<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListFacesResponseBody;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListFacesResponseBody\faces\cover;
use AlibabaCloud\Tea\Model;

class faces extends Model
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
     * @var bool
     */
    public $isMe;

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
    public $state;

    /**
     * @var string[]
     */
    public $axis;

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
        'isMe'        => 'IsMe',
        'cover'       => 'Cover',
        'mtime'       => 'Mtime',
        'ctime'       => 'Ctime',
        'state'       => 'State',
        'axis'        => 'Axis',
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
        if (null !== $this->isMe) {
            $res['IsMe'] = $this->isMe;
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->axis) {
            $res['Axis'] = $this->axis;
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
     * @return faces
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
        if (isset($map['IsMe'])) {
            $model->isMe = $map['IsMe'];
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Axis'])) {
            if (!empty($map['Axis'])) {
                $model->axis = $map['Axis'];
            }
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
