<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListDataCenterTableResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $descUpdateTime;

    /**
     * @var int
     */
    public $dmsDbId;

    /**
     * @var int
     */
    public $dmsInstanceId;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $importType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $tableDesc;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'descUpdateTime' => 'DescUpdateTime',
        'dmsDbId' => 'DmsDbId',
        'dmsInstanceId' => 'DmsInstanceId',
        'gmtCreated' => 'GmtCreated',
        'importType' => 'ImportType',
        'instanceName' => 'InstanceName',
        'tableDesc' => 'TableDesc',
        'tableId' => 'TableId',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->descUpdateTime) {
            $res['DescUpdateTime'] = $this->descUpdateTime;
        }

        if (null !== $this->dmsDbId) {
            $res['DmsDbId'] = $this->dmsDbId;
        }

        if (null !== $this->dmsInstanceId) {
            $res['DmsInstanceId'] = $this->dmsInstanceId;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->importType) {
            $res['ImportType'] = $this->importType;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->tableDesc) {
            $res['TableDesc'] = $this->tableDesc;
        }

        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['DescUpdateTime'])) {
            $model->descUpdateTime = $map['DescUpdateTime'];
        }

        if (isset($map['DmsDbId'])) {
            $model->dmsDbId = $map['DmsDbId'];
        }

        if (isset($map['DmsInstanceId'])) {
            $model->dmsInstanceId = $map['DmsInstanceId'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['ImportType'])) {
            $model->importType = $map['ImportType'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['TableDesc'])) {
            $model->tableDesc = $map['TableDesc'];
        }

        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
