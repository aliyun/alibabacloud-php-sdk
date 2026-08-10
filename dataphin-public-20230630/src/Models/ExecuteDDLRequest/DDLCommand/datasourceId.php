<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteDDLRequest\DDLCommand;

use AlibabaCloud\Dara\Model;

class datasourceId extends Model
{
    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $dsCategory;

    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $oneCatalogType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'catalog' => 'Catalog',
        'dsCategory' => 'DsCategory',
        'dsId' => 'DsId',
        'env' => 'Env',
        'oneCatalogType' => 'OneCatalogType',
        'projectId' => 'ProjectId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->dsCategory) {
            $res['DsCategory'] = $this->dsCategory;
        }

        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->oneCatalogType) {
            $res['OneCatalogType'] = $this->oneCatalogType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Catalog'])) {
            $model->catalog = $map['Catalog'];
        }

        if (isset($map['DsCategory'])) {
            $model->dsCategory = $map['DsCategory'];
        }

        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['OneCatalogType'])) {
            $model->oneCatalogType = $map['OneCatalogType'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
