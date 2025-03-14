<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteSynonymsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $synonymIdKeys;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'synonymIdKeys' => 'synonymIdKeys',
        'workspaceId' => 'workspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->synonymIdKeys) {
            $res['synonymIdKeys'] = $this->synonymIdKeys;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteSynonymsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['synonymIdKeys'])) {
            if (!empty($map['synonymIdKeys'])) {
                $model->synonymIdKeys = $map['synonymIdKeys'];
            }
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
