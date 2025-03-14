<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class DeleteBusinessLogicRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $businessLogicIdKeys;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'businessLogicIdKeys' => 'businessLogicIdKeys',
        'workspaceId' => 'workspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessLogicIdKeys) {
            $res['businessLogicIdKeys'] = $this->businessLogicIdKeys;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBusinessLogicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['businessLogicIdKeys'])) {
            if (!empty($map['businessLogicIdKeys'])) {
                $model->businessLogicIdKeys = $map['businessLogicIdKeys'];
            }
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
