<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateFeatureViewRequest\fields;
use AlibabaCloud\Tea\Model;

class CreateFeatureViewRequest extends Model
{
    /**
     * @example {"save_original_field":true}
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
     * @var fields[]
     */
    public $fields;

    /**
     * @description This parameter is required.
     *
     * @example FeatureView1
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 5
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
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @example Batch
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example Custom
     *
     * @var string
     */
    public $writeMethod;

    /**
     * @var bool
     */
    public $writeToFeatureDB;
    protected $_name = [
        'config'               => 'Config',
        'featureEntityId'      => 'FeatureEntityId',
        'fields'               => 'Fields',
        'name'                 => 'Name',
        'projectId'            => 'ProjectId',
        'registerDatasourceId' => 'RegisterDatasourceId',
        'registerTable'        => 'RegisterTable',
        'syncOnlineTable'      => 'SyncOnlineTable',
        'TTL'                  => 'TTL',
        'tags'                 => 'Tags',
        'type'                 => 'Type',
        'writeMethod'          => 'WriteMethod',
        'writeToFeatureDB'     => 'WriteToFeatureDB',
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
        if (null !== $this->fields) {
            $res['Fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['Fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->registerDatasourceId) {
            $res['RegisterDatasourceId'] = $this->registerDatasourceId;
        }
        if (null !== $this->registerTable) {
            $res['RegisterTable'] = $this->registerTable;
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
     * @return CreateFeatureViewRequest
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
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['Fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegisterDatasourceId'])) {
            $model->registerDatasourceId = $map['RegisterDatasourceId'];
        }
        if (isset($map['RegisterTable'])) {
            $model->registerTable = $map['RegisterTable'];
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
