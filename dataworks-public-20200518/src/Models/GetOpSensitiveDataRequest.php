<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetOpSensitiveDataRequest extends Model
{
    /**
     * @description The date on which access records were generated. Specify the value in the yyyyMMdd format.
     *
     * This parameter is required.
     * @example 20210116
     *
     * @var string
     */
    public $date;

    /**
     * @description The parameters that you can specify to query the access records. Valid values:
     *
     *   dbType: the data type
     *   instanceName: the name of the instance
     *   databaseName: the name of the database
     *   projectName: the name of the workspace
     *   clusterName: the name of the cluster
     *
     * This parameter is required.
     * @example [  {"dbType":"hologres","instanceName":"ABC","databaseName":"abc"},  {"dbType":"ODPS.ODPS","projectName":"adbc"}  ]
     *
     * @var string
     */
    public $name;

    /**
     * @description The operation that is performed on the data. Valid values:
     *
     *   SQL_SELECT: indicates that the data is accessed. For example, the SELECT statement is executed to query the data.
     *   TUNNEL_DOWNLOAD: indicates that the data is downloaded. For example, a Tunnel command is run to download the data.
     *
     * @example SQL_SELECT
     *
     * @var string
     */
    public $opType;

    /**
     * @description The number of the page to return. Minimum value:1. Maximum value: 1000.
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page. Minimum value: 1. Maximum value: 1000.
     *
     * This parameter is required.
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
