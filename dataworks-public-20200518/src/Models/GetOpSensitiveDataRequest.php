<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetOpSensitiveDataRequest extends Model
{
    /**
     * @example 20210116
     *
     * @var string
     */
    public $date;

    /**
     * @example [  {"dbType":"hologres","instanceName":"ABC","databaseName":"abc"},  {"dbType":"ODPS.ODPS","projectName":"adbc"}  ]
     *
     * @var string
     */
    public $name;

    /**
     * @example SQL_SELECT
     *
     * @var string
     */
    public $opType;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'date'     => 'Date',
        'name'     => 'Name',
        'opType'   => 'OpType',
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
