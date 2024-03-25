<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetFeatureViewResponseBody\fields;
use AlibabaCloud\Tea\Model;

class GetFeatureViewResponseBody extends Model
{
    /**
     * @example {"save_original_field":true}
     *
     * @var string
     */
    public $config;

    /**
     * @example 3
     *
     * @var string
     */
    public $featureEntityId;

    /**
     * @example featureEntity1
     *
     * @var string
     */
    public $featureEntityName;

    /**
     * @var fields[]
     */
    public $fields;

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
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtSyncTime;

    /**
     * @example user_id
     *
     * @var string
     */
    public $joinId;

    /**
     * @example {
     * }
     * @var string
     */
    public $lastSyncConfig;

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
     * @example from feature_store_py.fs_client import FeatureStoreClient\nimport datetime\nfrom feature_store_py.fs_datasource import MaxComputeDataSource\nimport sys\n\ncur_day = args[\"dt\"]\nprint(\"cur_day = \", cur_day)\n\naccess_key_id = o.account.access_id\naccess_key_secret = o.account.secret_access_key\nfs = FeatureStoreClient(access_key_id=access_key_id, access_key_secret=access_key_secret, region=\"cn-beijing\")\ncur_project_name = \"p1\"\nproject = fs.get_project(cur_project_name)\n\nfeature_view_name = \"user_fea\"\nbatch_feature_view = project.get_feature_view(feature_view_name)\ntask = batch_feature_view.publish_table(partitions={\"ds\":cur_day}, mode=\"Overwrite\")\ntask.wait()\ntask.print_summary()\n
     *
     * @var string
     */
    public $publishTableScript;

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
     * @example 72F15A8A-5A28-5B18-A0DE-0EABD7D3245A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $syncOnlineTable;

    /**
     * @example 90
     *
     * @var int
     */
    public $TTL;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @example Batch
     *
     * @var string
     */
    public $type;

    /**
     * @example custom
     *
     * @var string
     */
    public $writeMethod;

    /**
     * @var bool
     */
    public $writeToFeatureDB;
    protected $_name = [
        'config'                 => 'Config',
        'featureEntityId'        => 'FeatureEntityId',
        'featureEntityName'      => 'FeatureEntityName',
        'fields'                 => 'Fields',
        'gmtCreateTime'          => 'GmtCreateTime',
        'gmtModifiedTime'        => 'GmtModifiedTime',
        'gmtSyncTime'            => 'GmtSyncTime',
        'joinId'                 => 'JoinId',
        'lastSyncConfig'         => 'LastSyncConfig',
        'name'                   => 'Name',
        'owner'                  => 'Owner',
        'projectId'              => 'ProjectId',
        'projectName'            => 'ProjectName',
        'publishTableScript'     => 'PublishTableScript',
        'registerDatasourceId'   => 'RegisterDatasourceId',
        'registerDatasourceName' => 'RegisterDatasourceName',
        'registerTable'          => 'RegisterTable',
        'requestId'              => 'RequestId',
        'syncOnlineTable'        => 'SyncOnlineTable',
        'TTL'                    => 'TTL',
        'tags'                   => 'Tags',
        'type'                   => 'Type',
        'writeMethod'            => 'WriteMethod',
        'writeToFeatureDB'       => 'WriteToFeatureDB',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['Fields'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Tags'] = $this->tags;
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

    /**
     * @param array $map
     *
     * @return GetFeatureViewResponseBody
     */
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
                $n             = 0;
                foreach ($map['Fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
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
                $model->tags = $map['Tags'];
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
