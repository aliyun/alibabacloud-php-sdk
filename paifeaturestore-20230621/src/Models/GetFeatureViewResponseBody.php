<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureViewResponseBody\fields;

class GetFeatureViewResponseBody extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $featureEntityId;

    /**
     * @var string
     */
    public $featureEntityName;

    /**
     * @var fields[]
     */
    public $fields;

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
    public $gmtSyncTime;

    /**
     * @var string
     */
    public $joinId;

    /**
     * @var string
     */
    public $lastSyncConfig;

    /**
     * @var string
     */
    public $mockTableName;

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
    public $publishTableScript;

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
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $syncOnlineTable;

    /**
     * @var int
     */
    public $TTL;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $writeMethod;

    /**
     * @var bool
     */
    public $writeToFeatureDB;
    protected $_name = [
        'config' => 'Config',
        'featureEntityId' => 'FeatureEntityId',
        'featureEntityName' => 'FeatureEntityName',
        'fields' => 'Fields',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtSyncTime' => 'GmtSyncTime',
        'joinId' => 'JoinId',
        'lastSyncConfig' => 'LastSyncConfig',
        'mockTableName' => 'MockTableName',
        'name' => 'Name',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'publishTableScript' => 'PublishTableScript',
        'registerDatasourceId' => 'RegisterDatasourceId',
        'registerDatasourceName' => 'RegisterDatasourceName',
        'registerTable' => 'RegisterTable',
        'requestId' => 'RequestId',
        'syncOnlineTable' => 'SyncOnlineTable',
        'TTL' => 'TTL',
        'tags' => 'Tags',
        'type' => 'Type',
        'writeMethod' => 'WriteMethod',
        'writeToFeatureDB' => 'WriteToFeatureDB',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->featureEntityId) {
            $res['FeatureEntityId'] = $this->featureEntityId;
        }

        if (null !== $this->featureEntityName) {
            $res['FeatureEntityName'] = $this->featureEntityName;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['Fields'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->gmtSyncTime) {
            $res['GmtSyncTime'] = $this->gmtSyncTime;
        }

        if (null !== $this->joinId) {
            $res['JoinId'] = $this->joinId;
        }

        if (null !== $this->lastSyncConfig) {
            $res['LastSyncConfig'] = $this->lastSyncConfig;
        }

        if (null !== $this->mockTableName) {
            $res['MockTableName'] = $this->mockTableName;
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

        if (null !== $this->publishTableScript) {
            $res['PublishTableScript'] = $this->publishTableScript;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->syncOnlineTable) {
            $res['SyncOnlineTable'] = $this->syncOnlineTable;
        }

        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->writeMethod) {
            $res['WriteMethod'] = $this->writeMethod;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['FeatureEntityId'])) {
            $model->featureEntityId = $map['FeatureEntityId'];
        }

        if (isset($map['FeatureEntityName'])) {
            $model->featureEntityName = $map['FeatureEntityName'];
        }

        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['Fields'] as $item1) {
                    $model->fields[$n1++] = fields::fromMap($item1);
                }
            }
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['GmtSyncTime'])) {
            $model->gmtSyncTime = $map['GmtSyncTime'];
        }

        if (isset($map['JoinId'])) {
            $model->joinId = $map['JoinId'];
        }

        if (isset($map['LastSyncConfig'])) {
            $model->lastSyncConfig = $map['LastSyncConfig'];
        }

        if (isset($map['MockTableName'])) {
            $model->mockTableName = $map['MockTableName'];
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

        if (isset($map['PublishTableScript'])) {
            $model->publishTableScript = $map['PublishTableScript'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SyncOnlineTable'])) {
            $model->syncOnlineTable = $map['SyncOnlineTable'];
        }

        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WriteMethod'])) {
            $model->writeMethod = $map['WriteMethod'];
        }

        if (isset($map['WriteToFeatureDB'])) {
            $model->writeToFeatureDB = $map['WriteToFeatureDB'];
        }

        return $model;
    }
}
