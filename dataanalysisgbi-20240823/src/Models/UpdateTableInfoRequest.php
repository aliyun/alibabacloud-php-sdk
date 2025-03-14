<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

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
     * @example id
     *
     * @var string
     */
    public $primaryKey;

    /**
     * @description This parameter is required.
     *
     * @example table-AAAAAAAAFQBwSLJkUj4CYg
     *
     * @var string
     */
    public $tableIdKey;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->foreignKeys) {
            $res['foreignKeys'] = $this->foreignKeys;
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

    /**
     * @param array $map
     *
     * @return UpdateTableInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['foreignKeys'])) {
            if (!empty($map['foreignKeys'])) {
                $model->foreignKeys = $map['foreignKeys'];
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
