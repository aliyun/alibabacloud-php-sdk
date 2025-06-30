<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeApplyRequest;

use AlibabaCloud\Dara\Model;

class roomInfoList extends Model
{
    /**
     * @var string[]
     */
    public $cancelDate;

    /**
     * @var int
     */
    public $roomNo;
    protected $_name = [
        'cancelDate' => 'cancel_date',
        'roomNo' => 'room_no',
    ];

    public function validate()
    {
        if (\is_array($this->cancelDate)) {
            Model::validateArray($this->cancelDate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelDate) {
            if (\is_array($this->cancelDate)) {
                $res['cancel_date'] = [];
                $n1 = 0;
                foreach ($this->cancelDate as $item1) {
                    $res['cancel_date'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roomNo) {
            $res['room_no'] = $this->roomNo;
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
        if (isset($map['cancel_date'])) {
            if (!empty($map['cancel_date'])) {
                $model->cancelDate = [];
                $n1 = 0;
                foreach ($map['cancel_date'] as $item1) {
                    $model->cancelDate[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['room_no'])) {
            $model->roomNo = $map['room_no'];
        }

        return $model;
    }
}
