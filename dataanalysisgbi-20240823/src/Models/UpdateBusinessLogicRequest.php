<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class UpdateBusinessLogicRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example businessLogic-AAAAAAAAAGAIyJoP7LbKuA
     *
     * @var string
     */
    public $businessLogicIdKey;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'businessLogicIdKey' => 'businessLogicIdKey',
        'description'        => 'description',
        'type'               => 'type',
        'workspaceId'        => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessLogicIdKey) {
            $res['businessLogicIdKey'] = $this->businessLogicIdKey;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBusinessLogicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['businessLogicIdKey'])) {
            $model->businessLogicIdKey = $map['businessLogicIdKey'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
