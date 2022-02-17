<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\model;

use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\model\panoList\position;
use AlibabaCloud\Tea\Model;

class panoList extends Model
{
    /**
     * @description 当前房间的所有点位
     *
     * @var string[]
     */
    public $curRoomPicList;

    /**
     * @description 当前点位是否渲染，false不渲染，场景无法跳转
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description 楼层号
     *
     * @var string
     */
    public $floorIdx;

    /**
     * @description 点位ID
     *
     * @var string
     */
    public $id;

    /**
     * @description 单房间多图情况下，是否为主图，默认true
     *
     * @var bool
     */
    public $mainImage;

    /**
     * @description 当前房间邻近可视的点位id
     *
     * @var string[]
     */
    public $neighbours;

    /**
     * @description 位置数据
     *
     * @var position
     */
    public $position;

    /**
     * @description 一个名称，无实际意义
     *
     * @var string
     */
    public $rawName;

    /**
     * @description 全景贴图路径
     *
     * @var string
     */
    public $resource;

    /**
     * @description 房间号
     *
     * @var string
     */
    public $roomIdx;

    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $subSceneId;

    /**
     * @description token
     *
     * @var string
     */
    public $token;

    /**
     * @description 图片虚拟ID
     *
     * @var string
     */
    public $virtualId;

    /**
     * @description 图片名称
     *
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
