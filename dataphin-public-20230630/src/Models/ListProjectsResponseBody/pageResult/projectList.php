<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListProjectsResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class projectList extends Model
{
    /**
     * @example 162112
     *
     * @var int
     */
    public $bizUnitId;

    /**
     * @example 1121
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @example ds1
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @example 测试
     *
     * @var string
     */
    public $description;

    /**
     * @example 测试
     *
     * @var string
     */
    public $displayName;

    /**
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @example 2025-06-10 10:01:01
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2025-06-10 10:01:01
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1030111021
     *
     * @var int
     */
    public $id;

    /**
     * @example BASIC
     *
     * @var string
     */
    public $mode;

    /**
     * @example demo
     *
     * @var string
     */
    public $name;

    /**
     * @example 30012112
     *
     * @var string
     */
    public $owner;

    /**
     * @example 张三
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 1122
     *
     * @var int
     */
    public $realtimeDataSourceId;

    /**
     * @example ds2
     *
     * @var string
     */
    public $realtimeDataSourceName;

    /**
     * @example GENERAL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizUnitId' => 'BizUnitId',
        'dataSourceId' => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'env' => 'Env',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'mode' => 'Mode',
        'name' => 'Name',
        'owner' => 'Owner',
        'ownerName' => 'OwnerName',
        'realtimeDataSourceId' => 'RealtimeDataSourceId',
        'realtimeDataSourceName' => 'RealtimeDataSourceName',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->realtimeDataSourceId) {
            $res['RealtimeDataSourceId'] = $this->realtimeDataSourceId;
        }
        if (null !== $this->realtimeDataSourceName) {
            $res['RealtimeDataSourceName'] = $this->realtimeDataSourceName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['RealtimeDataSourceId'])) {
            $model->realtimeDataSourceId = $map['RealtimeDataSourceId'];
        }
        if (isset($map['RealtimeDataSourceName'])) {
            $model->realtimeDataSourceName = $map['RealtimeDataSourceName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
