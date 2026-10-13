<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class UpdateContextDatabaseSyncSourceSelectionRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
    public $sourceId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'selectedNodeKeys' => 'SelectedNodeKeys',
        'selectionPolicy' => 'SelectionPolicy',
        'sourceId' => 'SourceId',
        'workspaceId' => 'WorkspaceId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
