<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class GetDataLakeTableRequest extends Model
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
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'catalogName' => 'CatalogName',
        'dataRegion'  => 'DataRegion',
        'dbName'      => 'DbName',
        'name'        => 'Name',
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
