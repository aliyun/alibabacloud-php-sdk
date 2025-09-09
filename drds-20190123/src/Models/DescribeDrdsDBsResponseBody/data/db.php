<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBsResponseBody\data;

use AlibabaCloud\Dara\Model;

class db extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dbInstType;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dbInstType' => 'DbInstType',
        'dbName' => 'DbName',
        'mode' => 'Mode',
        'schema' => 'Schema',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dbInstType) {
            $res['DbInstType'] = $this->dbInstType;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DbInstType'])) {
            $model->dbInstType = $map['DbInstType'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
