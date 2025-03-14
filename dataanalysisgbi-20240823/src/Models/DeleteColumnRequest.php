<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class DeleteColumnRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example column-AAAAAAAAh6Q9ERazKYFvkA
     *
     * @var string
     */
    public $columnIdKey;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'columnIdKey' => 'columnIdKey',
        'workspaceId' => 'workspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnIdKey) {
            $res['columnIdKey'] = $this->columnIdKey;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteColumnRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columnIdKey'])) {
            $model->columnIdKey = $map['columnIdKey'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
