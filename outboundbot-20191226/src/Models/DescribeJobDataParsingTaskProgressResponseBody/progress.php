<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobDataParsingTaskProgressResponseBody;

use AlibabaCloud\Tea\Model;

class progress extends Model
{
    /**
     * @example Permission.JobStatus
     *
     * @var string
     */
    public $failErrorCode;

    /**
     * @example CreateCorpus
     *
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $feedbackUrl;

    /**
     * @example 2
     *
     * @var int
     */
    public $handledJobCount;

    /**
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalJobCount;
    protected $_name = [
        'failErrorCode'   => 'FailErrorCode',
        'failReason'      => 'FailReason',
        'feedbackUrl'     => 'FeedbackUrl',
        'handledJobCount' => 'HandledJobCount',
        'status'          => 'Status',
        'totalJobCount'   => 'TotalJobCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return progress
     */
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
