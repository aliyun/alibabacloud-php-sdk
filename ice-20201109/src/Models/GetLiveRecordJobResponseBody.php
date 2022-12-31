<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordJobResponseBody\recordJob;
use AlibabaCloud\Tea\Model;

class GetLiveRecordJobResponseBody extends Model
{
    /**
     * @description 录制任务
     *
     * @var recordJob
     */
    public $recordJob;

    /**
     * @example B57A046C-CE33-5FBB-B57A-D2B89ACF6907
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordJob' => 'RecordJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordJob) {
            $res['RecordJob'] = null !== $this->recordJob ? $this->recordJob->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLiveRecordJobResponseBody
     */
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
