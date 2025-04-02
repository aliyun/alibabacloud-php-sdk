<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class SanityCheckResultItem extends Model
{
    /**
     * @var int
     */
    public $checkNumber;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'checkNumber' => 'CheckNumber',
        'finishedAt' => 'FinishedAt',
        'message' => 'Message',
        'phase' => 'Phase',
        'startedAt' => 'StartedAt',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkNumber) {
            $res['CheckNumber'] = $this->checkNumber;
        }

        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->startedAt) {
            $res['StartedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CheckNumber'])) {
            $model->checkNumber = $map['CheckNumber'];
        }

        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['StartedAt'])) {
            $model->startedAt = $map['StartedAt'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
