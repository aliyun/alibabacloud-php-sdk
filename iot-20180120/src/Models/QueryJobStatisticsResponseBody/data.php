<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $cancelled;

    /**
     * @var int
     */
    public $failed;

    /**
     * @var int
     */
    public $inProgress;

    /**
     * @var int
     */
    public $queued;

    /**
     * @var int
     */
    public $rejected;

    /**
     * @var int
     */
    public $sent;

    /**
     * @var int
     */
    public $succeeded;

    /**
     * @var int
     */
    public $timeOut;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'cancelled'  => 'Cancelled',
        'failed'     => 'Failed',
        'inProgress' => 'InProgress',
        'queued'     => 'Queued',
        'rejected'   => 'Rejected',
        'sent'       => 'Sent',
        'succeeded'  => 'Succeeded',
        'timeOut'    => 'TimeOut',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelled) {
            $res['Cancelled'] = $this->cancelled;
        }
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->inProgress) {
            $res['InProgress'] = $this->inProgress;
        }
        if (null !== $this->queued) {
            $res['Queued'] = $this->queued;
        }
        if (null !== $this->rejected) {
            $res['Rejected'] = $this->rejected;
        }
        if (null !== $this->sent) {
            $res['Sent'] = $this->sent;
        }
        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
        }
        if (null !== $this->timeOut) {
            $res['TimeOut'] = $this->timeOut;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cancelled'])) {
            $model->cancelled = $map['Cancelled'];
        }
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['InProgress'])) {
            $model->inProgress = $map['InProgress'];
        }
        if (isset($map['Queued'])) {
            $model->queued = $map['Queued'];
        }
        if (isset($map['Rejected'])) {
            $model->rejected = $map['Rejected'];
        }
        if (isset($map['Sent'])) {
            $model->sent = $map['Sent'];
        }
        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }
        if (isset($map['TimeOut'])) {
            $model->timeOut = $map['TimeOut'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
