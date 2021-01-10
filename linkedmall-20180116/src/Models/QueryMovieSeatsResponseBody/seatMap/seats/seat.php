<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieSeatsResponseBody\seatMap\seats;

use AlibabaCloud\Tea\Model;

class seat extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $flag;

    /**
     * @var string
     */
    public $extId;

    /**
     * @var string
     */
    public $rowName;

    /**
     * @var int
     */
    public $topPx;

    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $leftPx;

    /**
     * @var int
     */
    public $column;

    /**
     * @var int
     */
    public $row;
    protected $_name = [
        'status'  => 'Status',
        'flag'    => 'Flag',
        'extId'   => 'ExtId',
        'rowName' => 'RowName',
        'topPx'   => 'TopPx',
        'area'    => 'Area',
        'name'    => 'Name',
        'leftPx'  => 'LeftPx',
        'column'  => 'Column',
        'row'     => 'Row',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->extId) {
            $res['ExtId'] = $this->extId;
        }
        if (null !== $this->rowName) {
            $res['RowName'] = $this->rowName;
        }
        if (null !== $this->topPx) {
            $res['TopPx'] = $this->topPx;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->leftPx) {
            $res['LeftPx'] = $this->leftPx;
        }
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }
        if (null !== $this->row) {
            $res['Row'] = $this->row;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['ExtId'])) {
            $model->extId = $map['ExtId'];
        }
        if (isset($map['RowName'])) {
            $model->rowName = $map['RowName'];
        }
        if (isset($map['TopPx'])) {
            $model->topPx = $map['TopPx'];
        }
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['LeftPx'])) {
            $model->leftPx = $map['LeftPx'];
        }
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }
        if (isset($map['Row'])) {
            $model->row = $map['Row'];
        }

        return $model;
    }
}
