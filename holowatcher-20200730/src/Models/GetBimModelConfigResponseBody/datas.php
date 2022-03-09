<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimModelConfigResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 梁高
     *
     * @var int
     */
    public $beamHeight;

    /**
     * @description 梁模式
     *
     * @var int
     */
    public $beamMode;

    /**
     * @description 梁偏移
     *
     * @var int
     */
    public $beamOffset;

    /**
     * @description 门高
     *
     * @var int
     */
    public $doorHeight;

    /**
     * @description 门偏移
     *
     * @var int
     */
    public $doorOffset;

    /**
     * @description 模型规则id
     *
     * @var int
     */
    public $id;

    /**
     * @description 房间模式
     *
     * @var int
     */
    public $roomMode;

    /**
     * @description 板模式
     *
     * @var int
     */
    public $slabMode;

    /**
     * @description 板厚度
     *
     * @var int
     */
    public $slabThickness;

    /**
     * @description 窗高
     *
     * @var int
     */
    public $windowHeight;

    /**
     * @description 窗偏移量
     *
     * @var int
     */
    public $windowOffset;
    protected $_name = [
        'beamHeight'    => 'BeamHeight',
        'beamMode'      => 'BeamMode',
        'beamOffset'    => 'BeamOffset',
        'doorHeight'    => 'DoorHeight',
        'doorOffset'    => 'DoorOffset',
        'id'            => 'Id',
        'roomMode'      => 'RoomMode',
        'slabMode'      => 'SlabMode',
        'slabThickness' => 'SlabThickness',
        'windowHeight'  => 'WindowHeight',
        'windowOffset'  => 'WindowOffset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beamHeight) {
            $res['BeamHeight'] = $this->beamHeight;
        }
        if (null !== $this->beamMode) {
            $res['BeamMode'] = $this->beamMode;
        }
        if (null !== $this->beamOffset) {
            $res['BeamOffset'] = $this->beamOffset;
        }
        if (null !== $this->doorHeight) {
            $res['DoorHeight'] = $this->doorHeight;
        }
        if (null !== $this->doorOffset) {
            $res['DoorOffset'] = $this->doorOffset;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->roomMode) {
            $res['RoomMode'] = $this->roomMode;
        }
        if (null !== $this->slabMode) {
            $res['SlabMode'] = $this->slabMode;
        }
        if (null !== $this->slabThickness) {
            $res['SlabThickness'] = $this->slabThickness;
        }
        if (null !== $this->windowHeight) {
            $res['WindowHeight'] = $this->windowHeight;
        }
        if (null !== $this->windowOffset) {
            $res['WindowOffset'] = $this->windowOffset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeamHeight'])) {
            $model->beamHeight = $map['BeamHeight'];
        }
        if (isset($map['BeamMode'])) {
            $model->beamMode = $map['BeamMode'];
        }
        if (isset($map['BeamOffset'])) {
            $model->beamOffset = $map['BeamOffset'];
        }
        if (isset($map['DoorHeight'])) {
            $model->doorHeight = $map['DoorHeight'];
        }
        if (isset($map['DoorOffset'])) {
            $model->doorOffset = $map['DoorOffset'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RoomMode'])) {
            $model->roomMode = $map['RoomMode'];
        }
        if (isset($map['SlabMode'])) {
            $model->slabMode = $map['SlabMode'];
        }
        if (isset($map['SlabThickness'])) {
            $model->slabThickness = $map['SlabThickness'];
        }
        if (isset($map['WindowHeight'])) {
            $model->windowHeight = $map['WindowHeight'];
        }
        if (isset($map['WindowOffset'])) {
            $model->windowOffset = $map['WindowOffset'];
        }

        return $model;
    }
}
