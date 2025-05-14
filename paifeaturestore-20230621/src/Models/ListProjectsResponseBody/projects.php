<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListProjectsResponseBody;

use AlibabaCloud\Dara\Model;

class projects extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $featureEntityCount;

    /**
     * @var int
     */
    public $featureViewCount;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var int
     */
    public $modelCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $offlineDatasourceId;

    /**
     * @var string
     */
    public $offlineDatasourceName;

    /**
     * @var string
     */
    public $offlineDatasourceType;

    /**
     * @var int
     */
    public $offlineLifecycle;

    /**
     * @var string
     */
    public $onlineDatasourceId;

    /**
     * @var string
     */
    public $onlineDatasourceName;

    /**
     * @var string
     */
    public $onlineDatasourceType;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'description' => 'Description',
        'featureEntityCount' => 'FeatureEntityCount',
        'featureViewCount' => 'FeatureViewCount',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'modelCount' => 'ModelCount',
        'name' => 'Name',
        'offlineDatasourceId' => 'OfflineDatasourceId',
        'offlineDatasourceName' => 'OfflineDatasourceName',
        'offlineDatasourceType' => 'OfflineDatasourceType',
        'offlineLifecycle' => 'OfflineLifecycle',
        'onlineDatasourceId' => 'OnlineDatasourceId',
        'onlineDatasourceName' => 'OnlineDatasourceName',
        'onlineDatasourceType' => 'OnlineDatasourceType',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
