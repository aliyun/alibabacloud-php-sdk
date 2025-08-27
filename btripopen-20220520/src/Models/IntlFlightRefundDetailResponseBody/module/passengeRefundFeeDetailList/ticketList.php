<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightRefundDetailResponseBody\module\passengeRefundFeeDetailList;

use AlibabaCloud\Dara\Model;

class ticketList extends Model
{
    /**
     * @var string[]
     */
    public $segmentKeyList;

    /**
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'segmentKeyList' => 'segment_key_list',
        'ticketNo' => 'ticket_no',
    ];

    public function validate()
    {
        if (\is_array($this->segmentKeyList)) {
            Model::validateArray($this->segmentKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->segmentKeyList) {
            if (\is_array($this->segmentKeyList)) {
                $res['segment_key_list'] = [];
                $n1 = 0;
                foreach ($this->segmentKeyList as $item1) {
                    $res['segment_key_list'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['segment_key_list'])) {
            if (!empty($map['segment_key_list'])) {
                $model->segmentKeyList = [];
                $n1 = 0;
                foreach ($map['segment_key_list'] as $item1) {
                    $model->segmentKeyList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
