<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddPublishBatchResponseBody extends Model
{
    /**
     * @description The ID of the release batch.
     *
     * @example 1
     *
     * @var int
     */
    public $batchId;

    /**
     * @description The request ID.
     *
     * @example 7BC55C8F-226E-5AF5-9A2C-2EC43864****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'batchId'   => 'BatchId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPublishBatchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
