<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetProjectFeatureViewResponseBody\fields;
use AlibabaCloud\Tea\Model;

class GetProjectFeatureViewResponseBody extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $config;

    /**
     * @example 4
     *
     * @var string
     */
    public $featureEntityId;

    /**
     * @example entity1
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
     * @var fields[]
     */
    public $fields;

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
     * @example {}
     *
     * @var string
     */
    public $lastSyncConfig;

    /**
     * @example feature_view1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1231421342****
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
     * @example table1
     *
     * @var string
     */
    public $registerTable;

    /**
     * @example BFD68AD5-398C-5AC4-A357-C7EA8DF33C26
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
     * @example Custom
     *
     * @var string
     */
    public $writeMethod;
    protected $_name = [
        'config'               => 'Config',
        'featureEntityId'      => 'FeatureEntityId',
        'featureEntityName'    => 'FeatureEntityName',
        'featureViewId'        => 'FeatureViewId',
        'fields'               => 'Fields',
        'gmtSyncTime'          => 'GmtSyncTime',
        'joinId'               => 'JoinId',
        'lastSyncConfig'       => 'LastSyncConfig',
        'name'                 => 'Name',
        'owner'                => 'Owner',
        'projectId'            => 'ProjectId',
        'projectName'          => 'ProjectName',
        'registerDatasourceId' => 'RegisterDatasourceId',
        'registerTable'        => 'RegisterTable',
        'requestId'            => 'RequestId',
        'syncOnlineTable'      => 'SyncOnlineTable',
        'TTL'                  => 'TTL',
        'tags'                 => 'Tags',
        'type'                 => 'Type',
        'writeMethod'          => 'WriteMethod',
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
        if (null !== $this->featureViewId) {
            $res['FeatureViewId'] = $this->featureViewId;
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
        if (null !== $this->registerDatasourceId) {
            $res['RegisterDatasourceId'] = $this->registerDatasourceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectFeatureViewResponseBody
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
        if (isset($map['FeatureViewId'])) {
            $model->featureViewId = $map['FeatureViewId'];
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
        if (isset($map['RegisterDatasourceId'])) {
            $model->registerDatasourceId = $map['RegisterDatasourceId'];
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

        return $model;
    }
}
