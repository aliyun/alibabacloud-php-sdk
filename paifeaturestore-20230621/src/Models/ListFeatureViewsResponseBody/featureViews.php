<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewsResponseBody;

use AlibabaCloud\Tea\Model;

class featureViews extends Model
{
    /**
     * @example featureEntity1
     *
     * @var string
     */
    public $featureEntityName;

    /**
     * @example 3
     *
     * @var string
     */
    public $featureViewId;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example featureView1
     *
     * @var string
     */
    public $name;

    /**
     * @example 12321421412****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 3
     *
     * @var string
     */
    public $projectId;

    /**
     * @example project1
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 4
     *
     * @var string
     */
    public $registerDatasourceId;

    /**
     * @example datasource1
     *
     * @var string
     */
    public $registerDatasourceName;

    /**
     * @example table1
     *
     * @var string
     */
    public $registerTable;

    /**
     * @example 90
     *
     * @var int
     */
    public $TTL;

    /**
     * @example Batch
     *
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $writeToFeatureDB;
    protected $_name = [
        'featureEntityName'      => 'FeatureEntityName',
        'featureViewId'          => 'FeatureViewId',
        'gmtCreateTime'          => 'GmtCreateTime',
        'gmtModifiedTime'        => 'GmtModifiedTime',
        'name'                   => 'Name',
        'owner'                  => 'Owner',
        'projectId'              => 'ProjectId',
        'projectName'            => 'ProjectName',
        'registerDatasourceId'   => 'RegisterDatasourceId',
        'registerDatasourceName' => 'RegisterDatasourceName',
        'registerTable'          => 'RegisterTable',
        'TTL'                    => 'TTL',
        'type'                   => 'Type',
        'writeToFeatureDB'       => 'WriteToFeatureDB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureEntityName) {
            $res['FeatureEntityName'] = $this->featureEntityName;
        }
        if (null !== $this->featureViewId) {
            $res['FeatureViewId'] = $this->featureViewId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->registerDatasourceId) {
            $res['RegisterDatasourceId'] = $this->registerDatasourceId;
        }
        if (null !== $this->registerDatasourceName) {
            $res['RegisterDatasourceName'] = $this->registerDatasourceName;
        }
        if (null !== $this->registerTable) {
            $res['RegisterTable'] = $this->registerTable;
        }
        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->writeToFeatureDB) {
            $res['WriteToFeatureDB'] = $this->writeToFeatureDB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return featureViews
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureEntityName'])) {
            $model->featureEntityName = $map['FeatureEntityName'];
        }
        if (isset($map['FeatureViewId'])) {
            $model->featureViewId = $map['FeatureViewId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RegisterDatasourceId'])) {
            $model->registerDatasourceId = $map['RegisterDatasourceId'];
        }
        if (isset($map['RegisterDatasourceName'])) {
            $model->registerDatasourceName = $map['RegisterDatasourceName'];
        }
        if (isset($map['RegisterTable'])) {
            $model->registerTable = $map['RegisterTable'];
        }
        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WriteToFeatureDB'])) {
            $model->writeToFeatureDB = $map['WriteToFeatureDB'];
        }

        return $model;
    }
}
