<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateAICoachTaskResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 10923AA3-F7A1-5EA0-ACCA-D704269EAA78
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $taskIds;
    protected $_name = [
        'requestId' => 'requestId',
        'taskIds'   => 'taskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->taskIds) {
            $res['taskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateAICoachTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['taskIds'])) {
            if (!empty($map['taskIds'])) {
                $model->taskIds = $map['taskIds'];
            }
        }

        return $model;
    }
}
