<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsResponseBody\data;

use AlibabaCloud\Tea\Model;

class db extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $dbInstType;
    protected $_name = [
        'status'     => 'Status',
        'dbName'     => 'DbName',
        'schema'     => 'Schema',
        'createTime' => 'CreateTime',
        'mode'       => 'Mode',
        'dbInstType' => 'DbInstType',
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
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return db
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }

        return $model;
    }
}
