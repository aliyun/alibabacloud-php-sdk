<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteTablesRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example database_test
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description IfExists
     *
     * @example true
     *
     * @var bool
     */
    public $ifExists;

    /**
     * @var string[]
     */
    public $tableNames;
    protected $_name = [
        'catalogId'    => 'CatalogId',
        'databaseName' => 'DatabaseName',
        'ifExists'     => 'IfExists',
        'tableNames'   => 'TableNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->ifExists) {
            $res['IfExists'] = $this->ifExists;
        }
        if (null !== $this->tableNames) {
            $res['TableNames'] = $this->tableNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IfExists'])) {
            $model->ifExists = $map['IfExists'];
        }
        if (isset($map['TableNames'])) {
            if (!empty($map['TableNames'])) {
                $model->tableNames = $map['TableNames'];
            }
        }

        return $model;
    }
}
