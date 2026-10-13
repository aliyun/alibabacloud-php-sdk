<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ListContextDatabaseSyncSourcesResponseBody\data;

use AlibabaCloud\Dara\Model;

class sources extends Model
{
    /**
     * @var string
     */
    public $confirmedAt;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $selectedNodeKeys;

    /**
     * @var string
     */
    public $selectionPolicy;

    /**
     * @var string
     */
    public $sourceConfig;
    protected $_name = [
        'confirmedAt' => 'ConfirmedAt',
        'connectionId' => 'ConnectionId',
        'id' => 'Id',
        'name' => 'Name',
        'selectedNodeKeys' => 'SelectedNodeKeys',
        'selectionPolicy' => 'SelectionPolicy',
        'sourceConfig' => 'SourceConfig',
    ];

    public function validate()
    {
        if (\is_array($this->selectedNodeKeys)) {
            Model::validateArray($this->selectedNodeKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confirmedAt) {
            $res['ConfirmedAt'] = $this->confirmedAt;
        }

        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->selectedNodeKeys) {
            if (\is_array($this->selectedNodeKeys)) {
                $res['SelectedNodeKeys'] = [];
                $n1 = 0;
                foreach ($this->selectedNodeKeys as $item1) {
                    $res['SelectedNodeKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selectionPolicy) {
            $res['SelectionPolicy'] = $this->selectionPolicy;
        }

        if (null !== $this->sourceConfig) {
            $res['SourceConfig'] = $this->sourceConfig;
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
        if (isset($map['ConfirmedAt'])) {
            $model->confirmedAt = $map['ConfirmedAt'];
        }

        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SelectedNodeKeys'])) {
            if (!empty($map['SelectedNodeKeys'])) {
                $model->selectedNodeKeys = [];
                $n1 = 0;
                foreach ($map['SelectedNodeKeys'] as $item1) {
                    $model->selectedNodeKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SelectionPolicy'])) {
            $model->selectionPolicy = $map['SelectionPolicy'];
        }

        if (isset($map['SourceConfig'])) {
            $model->sourceConfig = $map['SourceConfig'];
        }

        return $model;
    }
}
