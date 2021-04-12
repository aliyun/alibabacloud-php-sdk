<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDBTopologyResponseBody\DBTopology;

use AlibabaCloud\Tea\Model;

class DBTopologyInfoList extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceResourceId;

    /**
     * @var string
     */
    public $instanceSource;
    protected $_name = [
        'dbId'               => 'DbId',
        'schemaName'         => 'SchemaName',
        'catalogName'        => 'CatalogName',
        'searchName'         => 'SearchName',
        'dbType'             => 'DbType',
        'envType'            => 'EnvType',
        'instanceId'         => 'InstanceId',
        'regionId'           => 'RegionId',
        'instanceResourceId' => 'InstanceResourceId',
        'instanceSource'     => 'InstanceSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceResourceId) {
            $res['InstanceResourceId'] = $this->instanceResourceId;
        }
        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBTopologyInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceResourceId'])) {
            $model->instanceResourceId = $map['InstanceResourceId'];
        }
        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }

        return $model;
    }
}
