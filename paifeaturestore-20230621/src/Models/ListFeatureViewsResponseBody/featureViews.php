<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewsResponseBody;

use AlibabaCloud\Dara\Model;

class featureViews extends Model
{
    /**
     * @var string
     */
    public $featureEntityName;

    /**
     * @var string
     */
    public $featureViewId;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $registerDatasourceId;

    /**
     * @var string
     */
    public $registerDatasourceName;

    /**
     * @var string
     */
    public $registerTable;

    /**
     * @var int
     */
    public $TTL;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $writeToFeatureDB;
    protected $_name = [
        'featureEntityName' => 'FeatureEntityName',
        'featureViewId' => 'FeatureViewId',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'name' => 'Name',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'registerDatasourceId' => 'RegisterDatasourceId',
        'registerDatasourceName' => 'RegisterDatasourceName',
        'registerTable' => 'RegisterTable',
        'TTL' => 'TTL',
        'type' => 'Type',
        'writeToFeatureDB' => 'WriteToFeatureDB',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
