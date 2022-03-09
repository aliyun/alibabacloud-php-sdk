<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimFragmentRequest\floorInfo;
use AlibabaCloud\Tea\Model;

class UpdateBimFragmentRequest extends Model
{
    /**
     * @description 楼栋号
     *
     * @var string
     */
    public $buildingNo;

    /**
     * @var float[][]
     */
    public $coordinates;

    /**
     * @description 标准图纸Id
     *
     * @var int
     */
    public $drawingId;

    /**
     * @var floorInfo
     */
    public $floorInfo;

    /**
     * @description 归类id
     *
     * @var int
     */
    public $id;

    /**
     * @description 选择方式
     *
     * @var string
     */
    public $selectionMode;

    /**
     * @description 子类型
     *
     * @var string
     */
    public $subType;

    /**
     * @description 后缀
     *
     * @var string
     */
    public $suffix;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @description 类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'buildingNo'    => 'BuildingNo',
        'coordinates'   => 'Coordinates',
        'drawingId'     => 'DrawingId',
        'floorInfo'     => 'FloorInfo',
        'id'            => 'Id',
        'selectionMode' => 'SelectionMode',
        'subType'       => 'SubType',
        'suffix'        => 'Suffix',
        'taskId'        => 'TaskId',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildingNo) {
            $res['BuildingNo'] = $this->buildingNo;
        }
        if (null !== $this->coordinates) {
            $res['Coordinates'] = $this->coordinates;
        }
        if (null !== $this->drawingId) {
            $res['DrawingId'] = $this->drawingId;
        }
        if (null !== $this->floorInfo) {
            $res['FloorInfo'] = null !== $this->floorInfo ? $this->floorInfo->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->selectionMode) {
            $res['SelectionMode'] = $this->selectionMode;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBimFragmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildingNo'])) {
            $model->buildingNo = $map['BuildingNo'];
        }
        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = $map['Coordinates'];
            }
        }
        if (isset($map['DrawingId'])) {
            $model->drawingId = $map['DrawingId'];
        }
        if (isset($map['FloorInfo'])) {
            $model->floorInfo = floorInfo::fromMap($map['FloorInfo']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SelectionMode'])) {
            $model->selectionMode = $map['SelectionMode'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
