<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class ResyncTableRequest extends Model
{
    /**
     * @var bool
     */
    public $keep;

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
        'keep'        => 'keep',
        'tableIdKey'  => 'tableIdKey',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keep) {
            $res['keep'] = $this->keep;
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
     * @return ResyncTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keep'])) {
            $model->keep = $map['keep'];
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
