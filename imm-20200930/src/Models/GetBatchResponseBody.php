<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GetBatchResponseBody extends Model
{
    /**
     * @var DataIngestion
     */
    public $batch;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'batch' => 'Batch',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->batch) {
            $this->batch->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batch) {
            $res['Batch'] = null !== $this->batch ? $this->batch->toArray($noStream) : $this->batch;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
