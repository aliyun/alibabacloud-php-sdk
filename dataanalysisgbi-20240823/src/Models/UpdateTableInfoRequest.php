<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class UpdateTableInfoRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $foreignKeys;

    /**
     * @var string
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $tableIdKey;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'description' => 'description',
        'foreignKeys' => 'foreignKeys',
        'primaryKey' => 'primaryKey',
        'tableIdKey' => 'tableIdKey',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->foreignKeys)) {
            Model::validateArray($this->foreignKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->foreignKeys) {
            if (\is_array($this->foreignKeys)) {
                $res['foreignKeys'] = [];
                $n1 = 0;
                foreach ($this->foreignKeys as $item1) {
                    $res['foreignKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->primaryKey) {
            $res['primaryKey'] = $this->primaryKey;
        }

        if (null !== $this->tableIdKey) {
            $res['tableIdKey'] = $this->tableIdKey;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['foreignKeys'])) {
            if (!empty($map['foreignKeys'])) {
                $model->foreignKeys = [];
                $n1 = 0;
                foreach ($map['foreignKeys'] as $item1) {
                    $model->foreignKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['primaryKey'])) {
            $model->primaryKey = $map['primaryKey'];
        }

        if (isset($map['tableIdKey'])) {
            $model->tableIdKey = $map['tableIdKey'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
