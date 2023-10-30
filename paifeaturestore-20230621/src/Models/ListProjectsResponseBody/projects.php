<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectsResponseBody;

use AlibabaCloud\Tea\Model;

class projects extends Model
{
    /**
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @example 10
     *
     * @var int
     */
    public $featureEntityCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $featureViewCount;

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
     * @example 5
     *
     * @var int
     */
    public $modelCount;

    /**
     * @example project1
     *
     * @var string
     */
    public $name;

    /**
     * @example 4
     *
     * @var string
     */
    public $offlineDatasourceId;

    /**
     * @example datasource1
     *
     * @var string
     */
    public $offlineDatasourceName;

    /**
     * @example MaxCompute
     *
     * @var string
     */
    public $offlineDatasourceType;

    /**
     * @example 10
     *
     * @var int
     */
    public $offlineLifecycle;

    /**
     * @example 5
     *
     * @var string
     */
    public $onlineDatasourceId;

    /**
     * @example datasource2
     *
     * @var string
     */
    public $onlineDatasourceName;

    /**
     * @example Hologres
     *
     * @var string
     */
    public $onlineDatasourceType;

    /**
     * @example 1232132543543****
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
    protected $_name = [
        'description'           => 'Description',
        'featureEntityCount'    => 'FeatureEntityCount',
        'featureViewCount'      => 'FeatureViewCount',
        'gmtCreateTime'         => 'GmtCreateTime',
        'gmtModifiedTime'       => 'GmtModifiedTime',
        'modelCount'            => 'ModelCount',
        'name'                  => 'Name',
        'offlineDatasourceId'   => 'OfflineDatasourceId',
        'offlineDatasourceName' => 'OfflineDatasourceName',
        'offlineDatasourceType' => 'OfflineDatasourceType',
        'offlineLifecycle'      => 'OfflineLifecycle',
        'onlineDatasourceId'    => 'OnlineDatasourceId',
        'onlineDatasourceName'  => 'OnlineDatasourceName',
        'onlineDatasourceType'  => 'OnlineDatasourceType',
        'owner'                 => 'Owner',
        'projectId'             => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->featureEntityCount) {
            $res['FeatureEntityCount'] = $this->featureEntityCount;
        }
        if (null !== $this->featureViewCount) {
            $res['FeatureViewCount'] = $this->featureViewCount;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->modelCount) {
            $res['ModelCount'] = $this->modelCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->offlineDatasourceId) {
            $res['OfflineDatasourceId'] = $this->offlineDatasourceId;
        }
        if (null !== $this->offlineDatasourceName) {
            $res['OfflineDatasourceName'] = $this->offlineDatasourceName;
        }
        if (null !== $this->offlineDatasourceType) {
            $res['OfflineDatasourceType'] = $this->offlineDatasourceType;
        }
        if (null !== $this->offlineLifecycle) {
            $res['OfflineLifecycle'] = $this->offlineLifecycle;
        }
        if (null !== $this->onlineDatasourceId) {
            $res['OnlineDatasourceId'] = $this->onlineDatasourceId;
        }
        if (null !== $this->onlineDatasourceName) {
            $res['OnlineDatasourceName'] = $this->onlineDatasourceName;
        }
        if (null !== $this->onlineDatasourceType) {
            $res['OnlineDatasourceType'] = $this->onlineDatasourceType;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FeatureEntityCount'])) {
            $model->featureEntityCount = $map['FeatureEntityCount'];
        }
        if (isset($map['FeatureViewCount'])) {
            $model->featureViewCount = $map['FeatureViewCount'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['ModelCount'])) {
            $model->modelCount = $map['ModelCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OfflineDatasourceId'])) {
            $model->offlineDatasourceId = $map['OfflineDatasourceId'];
        }
        if (isset($map['OfflineDatasourceName'])) {
            $model->offlineDatasourceName = $map['OfflineDatasourceName'];
        }
        if (isset($map['OfflineDatasourceType'])) {
            $model->offlineDatasourceType = $map['OfflineDatasourceType'];
        }
        if (isset($map['OfflineLifecycle'])) {
            $model->offlineLifecycle = $map['OfflineLifecycle'];
        }
        if (isset($map['OnlineDatasourceId'])) {
            $model->onlineDatasourceId = $map['OnlineDatasourceId'];
        }
        if (isset($map['OnlineDatasourceName'])) {
            $model->onlineDatasourceName = $map['OnlineDatasourceName'];
        }
        if (isset($map['OnlineDatasourceType'])) {
            $model->onlineDatasourceType = $map['OnlineDatasourceType'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
