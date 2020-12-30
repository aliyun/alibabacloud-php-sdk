<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListMomentsResponseBody;

use AlibabaCloud\Tea\Model;

class moments extends Model
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
    public $takenAt;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $locationName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'idStr'        => 'IdStr',
        'photosCount'  => 'PhotosCount',
        'mtime'        => 'Mtime',
        'ctime'        => 'Ctime',
        'takenAt'      => 'TakenAt',
        'state'        => 'State',
        'locationName' => 'LocationName',
        'id'           => 'Id',
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
        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }
        if (null !== $this->takenAt) {
            $res['TakenAt'] = $this->takenAt;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->locationName) {
            $res['LocationName'] = $this->locationName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moments
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
        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }
        if (isset($map['TakenAt'])) {
            $model->takenAt = $map['TakenAt'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['LocationName'])) {
            $model->locationName = $map['LocationName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
