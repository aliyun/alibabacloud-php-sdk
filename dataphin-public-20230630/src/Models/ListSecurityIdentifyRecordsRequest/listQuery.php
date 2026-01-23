<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityIdentifyRecordsRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $datasourceEnv;

    /**
     * @var string
     */
    public $datasourceName;

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
    public $keyword;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $tableCatalog;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'datasourceEnv' => 'DatasourceEnv',
        'datasourceName' => 'DatasourceName',
        'fieldName' => 'FieldName',
        'isDatasourceTable' => 'IsDatasourceTable',
        'keyword' => 'Keyword',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
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
        if (null !== $this->datasourceEnv) {
            $res['DatasourceEnv'] = $this->datasourceEnv;
        }

        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->isDatasourceTable) {
            $res['IsDatasourceTable'] = $this->isDatasourceTable;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['DatasourceEnv'])) {
            $model->datasourceEnv = $map['DatasourceEnv'];
        }

        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['IsDatasourceTable'])) {
            $model->isDatasourceTable = $map['IsDatasourceTable'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
