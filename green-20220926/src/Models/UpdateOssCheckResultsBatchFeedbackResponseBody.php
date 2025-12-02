<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class UpdateOssCheckResultsBatchFeedbackResponseBody extends Model
{
    /**
     * @var int
     */
    public $invalidCount;

    /**
     * @var int
     */
    public $repeatCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'invalidCount' => 'InvalidCount',
        'repeatCount' => 'RepeatCount',
        'requestId' => 'RequestId',
        'successCount' => 'SuccessCount',
        'tips' => 'Tips',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidCount) {
            $res['InvalidCount'] = $this->invalidCount;
        }

        if (null !== $this->repeatCount) {
            $res['RepeatCount'] = $this->repeatCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['InvalidCount'])) {
            $model->invalidCount = $map['InvalidCount'];
        }

        if (isset($map['RepeatCount'])) {
            $model->repeatCount = $map['RepeatCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
