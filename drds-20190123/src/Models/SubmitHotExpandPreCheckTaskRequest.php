<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SubmitHotExpandPreCheckTaskRequest extends Model
{
    /**
     * @description The type of the database. Valid values:
     *
     *   RDS
     *   PolarDB
     *
     * @example RDS
     *
     * @var string
     */
    public $dbInstType;

    /**
     * @description The name of the PolarDB-X database.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drd*********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The name of the table.
     *
     * @example test
     *
     * @var string[]
     */
    public $tableList;
    protected $_name = [
        'dbInstType'     => 'DbInstType',
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'tableList'      => 'TableList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->tableList) {
            $res['TableList'] = $this->tableList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitHotExpandPreCheckTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['TableList'])) {
            if (!empty($map['TableList'])) {
                $model->tableList = $map['TableList'];
            }
        }

        return $model;
    }
}
