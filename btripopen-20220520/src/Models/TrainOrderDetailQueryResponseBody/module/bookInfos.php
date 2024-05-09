<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\bookInfos\bookTrainInfos;
use AlibabaCloud\Tea\Model;

class bookInfos extends Model
{
    /**
     * @var bookTrainInfos[]
     */
    public $bookTrainInfos;

    /**
     * @example 1111
     *
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failMsg;

    /**
     * @example 2024-05-06 15:19:01
     *
     * @var string
     */
    public $lastPayTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example GW123456
     *
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'bookTrainInfos' => 'book_train_infos',
        'failCode'       => 'fail_code',
        'failMsg'        => 'fail_msg',
        'lastPayTime'    => 'last_pay_time',
        'status'         => 'status',
        'ticketNo'       => 'ticket_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bookTrainInfos) {
            $res['book_train_infos'] = [];
            if (null !== $this->bookTrainInfos && \is_array($this->bookTrainInfos)) {
                $n = 0;
                foreach ($this->bookTrainInfos as $item) {
                    $res['book_train_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failCode) {
            $res['fail_code'] = $this->failCode;
        }
        if (null !== $this->failMsg) {
            $res['fail_msg'] = $this->failMsg;
        }
        if (null !== $this->lastPayTime) {
            $res['last_pay_time'] = $this->lastPayTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bookInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['book_train_infos'])) {
            if (!empty($map['book_train_infos'])) {
                $model->bookTrainInfos = [];
                $n                     = 0;
                foreach ($map['book_train_infos'] as $item) {
                    $model->bookTrainInfos[$n++] = null !== $item ? bookTrainInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['fail_code'])) {
            $model->failCode = $map['fail_code'];
        }
        if (isset($map['fail_msg'])) {
            $model->failMsg = $map['fail_msg'];
        }
        if (isset($map['last_pay_time'])) {
            $model->lastPayTime = $map['last_pay_time'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
