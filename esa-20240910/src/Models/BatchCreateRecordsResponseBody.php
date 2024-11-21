<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList;
use AlibabaCloud\Tea\Model;

class BatchCreateRecordsResponseBody extends Model
{
    /**
     * @description The records that have been created and failed to be created.
     *
     * @var recordResultList
     */
    public $recordResultList;

    /**
     * @description The request ID.
     *
     * @example 2430E05E-1340-5773-B5E1-B743929F46F2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordResultList' => 'RecordResultList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordResultList) {
            $res['RecordResultList'] = null !== $this->recordResultList ? $this->recordResultList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordResultList'])) {
            $model->recordResultList = recordResultList::fromMap($map['RecordResultList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
