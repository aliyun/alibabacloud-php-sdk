<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ListDataLakeTablebaseInfoRequest extends Model
{
    /**
     * @var string
     */
    public $catalogName;
    /**
     * @var string
     */
    public $dataRegion;
    /**
     * @var string
     */
    public $dbName;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $rows;
    /**
     * @var string
     */
    public $searchKey;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'catalogName' => 'CatalogName',
        'dataRegion'  => 'DataRegion',
        'dbName'      => 'DbName',
        'page'        => 'Page',
        'rows'        => 'Rows',
        'searchKey'   => 'SearchKey',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
