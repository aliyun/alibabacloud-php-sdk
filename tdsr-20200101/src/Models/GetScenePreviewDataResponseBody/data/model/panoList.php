<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\model;

use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\model\panoList\position;
use AlibabaCloud\Tea\Model;

class panoList extends Model
{
    /**
     * @var string[]
     */
    public $curRoomPicList;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $floorIdx;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $mainImage;

    /**
     * @var string[]
     */
    public $neighbours;

    /**
     * @var position
     */
    public $position;

    /**
     * @var string
     */
    public $rawName;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $roomIdx;

    /**
     * @var string
     */
    public $subSceneId;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $virtualId;

    /**
     * @var string
     */
    public $virtualName;
    protected $_name = [
        'curRoomPicList' => 'CurRoomPicList',
        'enabled'        => 'Enabled',
        'floorIdx'       => 'FloorIdx',
        'id'             => 'Id',
        'mainImage'      => 'MainImage',
        'neighbours'     => 'Neighbours',
        'position'       => 'Position',
        'rawName'        => 'RawName',
        'resource'       => 'Resource',
        'roomIdx'        => 'RoomIdx',
        'subSceneId'     => 'SubSceneId',
        'token'          => 'Token',
        'virtualId'      => 'VirtualId',
        'virtualName'    => 'VirtualName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->curRoomPicList) {
            $res['CurRoomPicList'] = $this->curRoomPicList;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->floorIdx) {
            $res['FloorIdx'] = $this->floorIdx;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mainImage) {
            $res['MainImage'] = $this->mainImage;
        }
        if (null !== $this->neighbours) {
            $res['Neighbours'] = $this->neighbours;
        }
        if (null !== $this->position) {
            $res['Position'] = null !== $this->position ? $this->position->toMap() : null;
        }
        if (null !== $this->rawName) {
            $res['RawName'] = $this->rawName;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->roomIdx) {
            $res['RoomIdx'] = $this->roomIdx;
        }
        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->virtualId) {
            $res['VirtualId'] = $this->virtualId;
        }
        if (null !== $this->virtualName) {
            $res['VirtualName'] = $this->virtualName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return panoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurRoomPicList'])) {
            if (!empty($map['CurRoomPicList'])) {
                $model->curRoomPicList = $map['CurRoomPicList'];
            }
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['FloorIdx'])) {
            $model->floorIdx = $map['FloorIdx'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MainImage'])) {
            $model->mainImage = $map['MainImage'];
        }
        if (isset($map['Neighbours'])) {
            if (!empty($map['Neighbours'])) {
                $model->neighbours = $map['Neighbours'];
            }
        }
        if (isset($map['Position'])) {
            $model->position = position::fromMap($map['Position']);
        }
        if (isset($map['RawName'])) {
            $model->rawName = $map['RawName'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['RoomIdx'])) {
            $model->roomIdx = $map['RoomIdx'];
        }
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['VirtualId'])) {
            $model->virtualId = $map['VirtualId'];
        }
        if (isset($map['VirtualName'])) {
            $model->virtualName = $map['VirtualName'];
        }

        return $model;
    }
}
