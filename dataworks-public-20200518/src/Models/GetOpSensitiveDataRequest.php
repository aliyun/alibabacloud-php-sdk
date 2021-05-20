<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetOpSensitiveDataRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $opType;
    protected $_name = [
        'name'     => 'Name',
        'pageSize' => 'PageSize',
        'pageNo'   => 'PageNo',
        'date'     => 'Date',
        'opType'   => 'OpType',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('date', $this->date, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpSensitiveDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        return $model;
    }
}
