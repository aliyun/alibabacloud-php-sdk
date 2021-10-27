<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class RemoveDrdsMysqlRequest extends Model
{
    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $roDbInstanceId;
    protected $_name = [
        'dbInstanceId'   => 'DbInstanceId',
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'force'          => 'Force',
        'roDbInstanceId' => 'RoDbInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->roDbInstanceId) {
            $res['RoDbInstanceId'] = $this->roDbInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveDrdsMysqlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['RoDbInstanceId'])) {
            $model->roDbInstanceId = $map['RoDbInstanceId'];
        }

        return $model;
    }
}
