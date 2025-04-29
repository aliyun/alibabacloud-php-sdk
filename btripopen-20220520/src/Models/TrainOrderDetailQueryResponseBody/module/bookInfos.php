<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TrainOrderDetailQueryResponseBody\module\bookInfos\bookTrainInfos;

class bookInfos extends Model
{
    /**
     * @var bookTrainInfos[]
     */
    public $bookTrainInfos;

    /**
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failMsg;

    /**
     * @var string
     */
    public $lastPayTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'bookTrainInfos' => 'book_train_infos',
        'failCode' => 'fail_code',
        'failMsg' => 'fail_msg',
        'lastPayTime' => 'last_pay_time',
        'status' => 'status',
        'ticketNo' => 'ticket_no',
    ];

    public function validate()
    {
        if (\is_array($this->bookTrainInfos)) {
            Model::validateArray($this->bookTrainInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookTrainInfos) {
            if (\is_array($this->bookTrainInfos)) {
                $res['book_train_infos'] = [];
                $n1 = 0;
                foreach ($this->bookTrainInfos as $item1) {
                    $res['book_train_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['book_train_infos'])) {
            if (!empty($map['book_train_infos'])) {
                $model->bookTrainInfos = [];
                $n1 = 0;
                foreach ($map['book_train_infos'] as $item1) {
                    $model->bookTrainInfos[$n1++] = bookTrainInfos::fromMap($item1);
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
