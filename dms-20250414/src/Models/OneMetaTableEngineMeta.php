<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class OneMetaTableEngineMeta extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $dataBytes;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $indexBytes;

    /**
     * @var string
     */
    public $lastDdlTime;

    /**
     * @var int
     */
    public $numRows;

    /**
     * @var string
     */
    public $refInfo;

    /**
     * @var int
     */
    public $storageCapacity;

    /**
     * @var string
     */
    public $tableSchemaName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataBytes' => 'DataBytes',
        'encoding' => 'Encoding',
        'engine' => 'Engine',
        'indexBytes' => 'IndexBytes',
        'lastDdlTime' => 'LastDdlTime',
        'numRows' => 'NumRows',
        'refInfo' => 'RefInfo',
        'storageCapacity' => 'StorageCapacity',
        'tableSchemaName' => 'TableSchemaName',
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

        if (null !== $this->dataBytes) {
            $res['DataBytes'] = $this->dataBytes;
        }

        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->indexBytes) {
            $res['IndexBytes'] = $this->indexBytes;
        }

        if (null !== $this->lastDdlTime) {
            $res['LastDdlTime'] = $this->lastDdlTime;
        }

        if (null !== $this->numRows) {
            $res['NumRows'] = $this->numRows;
        }

        if (null !== $this->refInfo) {
            $res['RefInfo'] = $this->refInfo;
        }

        if (null !== $this->storageCapacity) {
            $res['StorageCapacity'] = $this->storageCapacity;
        }

        if (null !== $this->tableSchemaName) {
            $res['TableSchemaName'] = $this->tableSchemaName;
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

        if (isset($map['DataBytes'])) {
            $model->dataBytes = $map['DataBytes'];
        }

        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['IndexBytes'])) {
            $model->indexBytes = $map['IndexBytes'];
        }

        if (isset($map['LastDdlTime'])) {
            $model->lastDdlTime = $map['LastDdlTime'];
        }

        if (isset($map['NumRows'])) {
            $model->numRows = $map['NumRows'];
        }

        if (isset($map['RefInfo'])) {
            $model->refInfo = $map['RefInfo'];
        }

        if (isset($map['StorageCapacity'])) {
            $model->storageCapacity = $map['StorageCapacity'];
        }

        if (isset($map['TableSchemaName'])) {
            $model->tableSchemaName = $map['TableSchemaName'];
        }

        return $model;
    }
}
