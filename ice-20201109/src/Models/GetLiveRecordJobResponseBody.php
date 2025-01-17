<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordJobResponseBody\recordJob;

class GetLiveRecordJobResponseBody extends Model
{
    /**
     * @var recordJob
     */
    public $recordJob;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordJob' => 'RecordJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recordJob) {
            $this->recordJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordJob) {
            $res['RecordJob'] = null !== $this->recordJob ? $this->recordJob->toArray($noStream) : $this->recordJob;
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
        if (isset($map['RecordJob'])) {
            $model->recordJob = recordJob::fromMap($map['RecordJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
