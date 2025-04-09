<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobDataParsingTaskProgressResponseBody;

use AlibabaCloud\Dara\Model;

class progress extends Model
{
    /**
     * @var string
     */
    public $failErrorCode;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $feedbackUrl;

    /**
     * @var int
     */
    public $handledJobCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalJobCount;
    protected $_name = [
        'failErrorCode' => 'FailErrorCode',
        'failReason' => 'FailReason',
        'feedbackUrl' => 'FeedbackUrl',
        'handledJobCount' => 'HandledJobCount',
        'status' => 'Status',
        'totalJobCount' => 'TotalJobCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failErrorCode) {
            $res['FailErrorCode'] = $this->failErrorCode;
        }

        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }

        if (null !== $this->feedbackUrl) {
            $res['FeedbackUrl'] = $this->feedbackUrl;
        }

        if (null !== $this->handledJobCount) {
            $res['HandledJobCount'] = $this->handledJobCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalJobCount) {
            $res['TotalJobCount'] = $this->totalJobCount;
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
        if (isset($map['FailErrorCode'])) {
            $model->failErrorCode = $map['FailErrorCode'];
        }

        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        if (isset($map['FeedbackUrl'])) {
            $model->feedbackUrl = $map['FeedbackUrl'];
        }

        if (isset($map['HandledJobCount'])) {
            $model->handledJobCount = $map['HandledJobCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalJobCount'])) {
            $model->totalJobCount = $map['TotalJobCount'];
        }

        return $model;
    }
}
