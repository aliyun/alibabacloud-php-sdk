<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateSampleConsistencyJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sampleConsistencyJobId;
    protected $_name = [
        'requestId' => 'RequestId',
        'sampleConsistencyJobId' => 'SampleConsistencyJobId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sampleConsistencyJobId) {
            $res['SampleConsistencyJobId'] = $this->sampleConsistencyJobId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SampleConsistencyJobId'])) {
            $model->sampleConsistencyJobId = $map['SampleConsistencyJobId'];
        }

        return $model;
    }
}
