<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetBatchResponseBody extends Model
{
    /**
     * @var DataIngestion
     */
    public $batch;

    /**
     * @example 6E93D6C9-5AC0-49F9-914D-E02678D3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'batch'     => 'Batch',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batch) {
            $res['Batch'] = null !== $this->batch ? $this->batch->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBatchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Batch'])) {
            $model->batch = DataIngestion::fromMap($map['Batch']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
