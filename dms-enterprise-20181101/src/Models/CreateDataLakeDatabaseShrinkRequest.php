<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class CreateDataLakeDatabaseShrinkRequest extends Model
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
    public $description;
    /**
     * @var string
     */
    public $location;
    /**
     * @var string
     */
    public $parametersShrink;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'catalogName'      => 'CatalogName',
        'dataRegion'       => 'DataRegion',
        'dbName'           => 'DbName',
        'description'      => 'Description',
        'location'         => 'Location',
        'parametersShrink' => 'Parameters',
        'tid'              => 'Tid',
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
