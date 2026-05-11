<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class GetJobRecordDurationResponseBody extends Model
{
    /**
     * @var int
     */
    public $jobRecordDuration;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobRecordDuration' => 'JobRecordDuration',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobRecordDuration) {
            $res['JobRecordDuration'] = $this->jobRecordDuration;
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
        if (isset($map['JobRecordDuration'])) {
            $model->jobRecordDuration = $map['JobRecordDuration'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
