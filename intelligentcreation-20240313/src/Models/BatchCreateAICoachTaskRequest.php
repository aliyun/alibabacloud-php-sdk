<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateAICoachTaskRequest extends Model
{
    /**
     * @example 7915125A-0D96-5A25-A54B-D3B739A86AFC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $scriptRecordId;

    /**
     * @var string[]
     */
    public $studentIds;
    protected $_name = [
        'requestId'      => 'requestId',
        'scriptRecordId' => 'scriptRecordId',
        'studentIds'     => 'studentIds',
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
        if (null !== $this->scriptRecordId) {
            $res['scriptRecordId'] = $this->scriptRecordId;
        }
        if (null !== $this->studentIds) {
            $res['studentIds'] = $this->studentIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateAICoachTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['scriptRecordId'])) {
            $model->scriptRecordId = $map['scriptRecordId'];
        }
        if (isset($map['studentIds'])) {
            if (!empty($map['studentIds'])) {
                $model->studentIds = $map['studentIds'];
            }
        }

        return $model;
    }
}
