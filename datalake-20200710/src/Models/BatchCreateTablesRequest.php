<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateTablesRequest extends Model
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
     * @example true
     *
     * @var bool
     */
    public $ifNotExists;

    /**
     * @var TableInput[]
     */
    public $tableInputs;
    protected $_name = [
        'catalogId'    => 'CatalogId',
        'databaseName' => 'DatabaseName',
        'ifNotExists'  => 'IfNotExists',
        'tableInputs'  => 'TableInputs',
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
        if (null !== $this->ifNotExists) {
            $res['IfNotExists'] = $this->ifNotExists;
        }
        if (null !== $this->tableInputs) {
            $res['TableInputs'] = [];
            if (null !== $this->tableInputs && \is_array($this->tableInputs)) {
                $n = 0;
                foreach ($this->tableInputs as $item) {
                    $res['TableInputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateTablesRequest
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
        if (isset($map['IfNotExists'])) {
            $model->ifNotExists = $map['IfNotExists'];
        }
        if (isset($map['TableInputs'])) {
            if (!empty($map['TableInputs'])) {
                $model->tableInputs = [];
                $n                  = 0;
                foreach ($map['TableInputs'] as $item) {
                    $model->tableInputs[$n++] = null !== $item ? TableInput::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
