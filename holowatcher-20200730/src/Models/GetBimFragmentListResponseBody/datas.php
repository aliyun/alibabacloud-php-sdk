<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimFragmentListResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimFragmentListResponseBody\datas\floorInfo;
use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @var string
     */
    public $buildingNo;

    /**
     * @var float[][]
     */
    public $coordinates;

    /**
     * @var int
     */
    public $drawingId;

    /**
     * @var floorInfo[]
     */
    public $floorInfo;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $selectionMode;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $suffix;

    /**
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
        'subject'       => 'Subject',
        'suffix'        => 'Suffix',
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
            $res['FloorInfo'] = [];
            if (null !== $this->floorInfo && \is_array($this->floorInfo)) {
                $n = 0;
                foreach ($this->floorInfo as $item) {
                    $res['FloorInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->suffix) {
            $res['Suffix'] = $this->suffix;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
            if (!empty($map['FloorInfo'])) {
                $model->floorInfo = [];
                $n                = 0;
                foreach ($map['FloorInfo'] as $item) {
                    $model->floorInfo[$n++] = null !== $item ? floorInfo::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Suffix'])) {
            $model->suffix = $map['Suffix'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
