<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateSecurityIdentifyResultRequest;

use AlibabaCloud\Dara\Model;

class createCommand extends Model
{
    /**
     * @var int
     */
    public $classifyId;

    /**
     * @var string
     */
    public $conflictStrategy;

    /**
     * @var string
     */
    public $datasourceEnv;

    /**
     * @var string
     */
    public $datasourceName;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var bool
     */
    public $isDatasourceTable;

    /**
     * @var string
     */
    public $tableCatalog;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'classifyId' => 'ClassifyId',
        'conflictStrategy' => 'ConflictStrategy',
        'datasourceEnv' => 'DatasourceEnv',
        'datasourceName' => 'DatasourceName',
        'enable' => 'Enable',
        'fieldName' => 'FieldName',
        'isDatasourceTable' => 'IsDatasourceTable',
        'tableCatalog' => 'TableCatalog',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classifyId) {
            $res['ClassifyId'] = $this->classifyId;
        }

        if (null !== $this->conflictStrategy) {
            $res['ConflictStrategy'] = $this->conflictStrategy;
        }

        if (null !== $this->datasourceEnv) {
            $res['DatasourceEnv'] = $this->datasourceEnv;
        }

        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->isDatasourceTable) {
            $res['IsDatasourceTable'] = $this->isDatasourceTable;
        }

        if (null !== $this->tableCatalog) {
            $res['TableCatalog'] = $this->tableCatalog;
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
        if (isset($map['ClassifyId'])) {
            $model->classifyId = $map['ClassifyId'];
        }

        if (isset($map['ConflictStrategy'])) {
            $model->conflictStrategy = $map['ConflictStrategy'];
        }

        if (isset($map['DatasourceEnv'])) {
            $model->datasourceEnv = $map['DatasourceEnv'];
        }

        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['IsDatasourceTable'])) {
            $model->isDatasourceTable = $map['IsDatasourceTable'];
        }

        if (isset($map['TableCatalog'])) {
            $model->tableCatalog = $map['TableCatalog'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
