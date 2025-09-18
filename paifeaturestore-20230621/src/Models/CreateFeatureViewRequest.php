<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CreateFeatureViewRequest\fields;

class CreateFeatureViewRequest extends Model
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
     * @var fields[]
     */
    public $fields;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $registerDatasourceId;

    /**
     * @var string
     */
    public $registerTable;

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
        'fields' => 'Fields',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'registerDatasourceId' => 'RegisterDatasourceId',
        'registerTable' => 'RegisterTable',
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

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['Fields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
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

        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['Fields'] as $item1) {
                    $model->fields[$n1] = fields::fromMap($item1);
                    ++$n1;
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
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
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
