<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBIFileUploadCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $characterSetName;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableType;
    protected $_name = [
        'characterSetName' => 'CharacterSetName',
        'dbName' => 'DbName',
        'fileName' => 'FileName',
        'instanceName' => 'InstanceName',
        'tableName' => 'TableName',
        'tableType' => 'TableType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
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
        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
