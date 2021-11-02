<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class histories extends Model
{
    /**
     * @var string
     */
    public $auditor;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $reason;

    /**
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
