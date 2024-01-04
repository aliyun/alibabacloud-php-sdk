<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class SanityCheckResultItem extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $checkNumber;

    /**
     * @example ”2023-11-30T16:47:30.378817+08:00"
     *
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $message;

    /**
     * @example CheckInit
     *
     * @var string
     */
    public $phase;

    /**
     * @example ”2023-11-30T16:47:30.343005+08:00“
     *
     * @var string
     */
    public $startedAt;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'checkNumber' => 'CheckNumber',
        'finishedAt'  => 'FinishedAt',
        'message'     => 'Message',
        'phase'       => 'Phase',
        'startedAt'   => 'StartedAt',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SanityCheckResultItem
     */
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
