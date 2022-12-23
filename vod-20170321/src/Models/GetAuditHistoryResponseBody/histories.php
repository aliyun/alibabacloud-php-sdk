<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class histories extends Model
{
    /**
     * @description The reviewer.
     *
     * @example auditor
     *
     * @var string
     */
    public $auditor;

    /**
     * @description The review comments, which are provided by the reviewer.
     *
     * @example Contains nudity
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the review record was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The reason why the video failed the review. If the video failed the review, specify the reason.
     *
     * @example Pornographic video
     *
     * @var string
     */
    public $reason;

    /**
     * @description The manual review result. Valid values:
     * - **Normal**: The video can be played.
     * - **Blocked**: The video is blocked.
     * @example Blocked
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'auditor'      => 'Auditor',
        'comment'      => 'Comment',
        'creationTime' => 'CreationTime',
        'reason'       => 'Reason',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditor) {
            $res['Auditor'] = $this->auditor;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return histories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auditor'])) {
            $model->auditor = $map['Auditor'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
