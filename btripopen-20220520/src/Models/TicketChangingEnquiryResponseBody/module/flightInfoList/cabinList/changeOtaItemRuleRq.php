<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\changeDetails;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\refundDetails;

class changeOtaItemRuleRq extends Model
{
    /**
     * @var baggageDetails[]
     */
    public $baggageDetails;

    /**
     * @var changeDetails[]
     */
    public $changeDetails;

    /**
     * @var refundDetails[]
     */
    public $refundDetails;
    protected $_name = [
        'baggageDetails' => 'baggage_details',
        'changeDetails' => 'change_details',
        'refundDetails' => 'refund_details',
    ];

    public function validate()
    {
        if (\is_array($this->baggageDetails)) {
            Model::validateArray($this->baggageDetails);
        }
        if (\is_array($this->changeDetails)) {
            Model::validateArray($this->changeDetails);
        }
        if (\is_array($this->refundDetails)) {
            Model::validateArray($this->refundDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageDetails) {
            if (\is_array($this->baggageDetails)) {
                $res['baggage_details'] = [];
                $n1 = 0;
                foreach ($this->baggageDetails as $item1) {
                    $res['baggage_details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->changeDetails) {
            if (\is_array($this->changeDetails)) {
                $res['change_details'] = [];
                $n1 = 0;
                foreach ($this->changeDetails as $item1) {
                    $res['change_details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundDetails) {
            if (\is_array($this->refundDetails)) {
                $res['refund_details'] = [];
                $n1 = 0;
                foreach ($this->refundDetails as $item1) {
                    $res['refund_details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['baggage_details'])) {
            if (!empty($map['baggage_details'])) {
                $model->baggageDetails = [];
                $n1 = 0;
                foreach ($map['baggage_details'] as $item1) {
                    $model->baggageDetails[$n1] = baggageDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['change_details'])) {
            if (!empty($map['change_details'])) {
                $model->changeDetails = [];
                $n1 = 0;
                foreach ($map['change_details'] as $item1) {
                    $model->changeDetails[$n1] = changeDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['refund_details'])) {
            if (!empty($map['refund_details'])) {
                $model->refundDetails = [];
                $n1 = 0;
                foreach ($map['refund_details'] as $item1) {
                    $model->refundDetails[$n1] = refundDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
