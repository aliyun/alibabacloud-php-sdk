<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSeatsResponseBody\seatMap\seats;

use AlibabaCloud\Tea\Model;

class seat extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $area;

    /**
     * @example 20
     *
     * @var int
     */
    public $column;

    /**
     * @example ""
     *
     * @var string
     */
    public $extId;

    /**
     * @example 0
     *
     * @var int
     */
    public $flag;

    /**
     * @example 30
     *
     * @var int
     */
    public $leftPx;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 20
     *
     * @var int
     */
    public $row;

    /**
     * @example ""
     *
     * @var string
     */
    public $rowName;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 30
     *
     * @var int
     */
    public $topPx;
    protected $_name = [
        'area'    => 'Area',
        'column'  => 'Column',
        'extId'   => 'ExtId',
        'flag'    => 'Flag',
        'leftPx'  => 'LeftPx',
        'name'    => 'Name',
        'row'     => 'Row',
        'rowName' => 'RowName',
        'status'  => 'Status',
        'topPx'   => 'TopPx',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }
        if (null !== $this->extId) {
            $res['ExtId'] = $this->extId;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->leftPx) {
            $res['LeftPx'] = $this->leftPx;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->row) {
            $res['Row'] = $this->row;
        }
        if (null !== $this->rowName) {
            $res['RowName'] = $this->rowName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->topPx) {
            $res['TopPx'] = $this->topPx;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return seat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }
        if (isset($map['ExtId'])) {
            $model->extId = $map['ExtId'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['LeftPx'])) {
            $model->leftPx = $map['LeftPx'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Row'])) {
            $model->row = $map['Row'];
        }
        if (isset($map['RowName'])) {
            $model->rowName = $map['RowName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TopPx'])) {
            $model->topPx = $map['TopPx'];
        }

        return $model;
    }
}
