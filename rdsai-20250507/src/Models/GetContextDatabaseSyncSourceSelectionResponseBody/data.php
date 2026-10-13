<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncSourceSelectionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $confirmedAt;

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
    public $updatedAt;
    protected $_name = [
        'confirmedAt' => 'ConfirmedAt',
        'selectedNodeKeys' => 'SelectedNodeKeys',
        'selectionPolicy' => 'SelectionPolicy',
        'updatedAt' => 'UpdatedAt',
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

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
