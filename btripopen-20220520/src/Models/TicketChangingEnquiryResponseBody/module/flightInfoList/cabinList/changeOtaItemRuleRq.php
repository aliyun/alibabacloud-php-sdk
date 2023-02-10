<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\changeDetails;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\refundDetails;
use AlibabaCloud\Tea\Model;

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
        'changeDetails'  => 'change_details',
        'refundDetails'  => 'refund_details',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageDetails) {
            $res['baggage_details'] = [];
            if (null !== $this->baggageDetails && \is_array($this->baggageDetails)) {
                $n = 0;
                foreach ($this->baggageDetails as $item) {
                    $res['baggage_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->changeDetails) {
            $res['change_details'] = [];
            if (null !== $this->changeDetails && \is_array($this->changeDetails)) {
                $n = 0;
                foreach ($this->changeDetails as $item) {
                    $res['change_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->refundDetails) {
            $res['refund_details'] = [];
            if (null !== $this->refundDetails && \is_array($this->refundDetails)) {
                $n = 0;
                foreach ($this->refundDetails as $item) {
                    $res['refund_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeOtaItemRuleRq
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_details'])) {
            if (!empty($map['baggage_details'])) {
                $model->baggageDetails = [];
                $n                     = 0;
                foreach ($map['baggage_details'] as $item) {
                    $model->baggageDetails[$n++] = null !== $item ? baggageDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['change_details'])) {
            if (!empty($map['change_details'])) {
                $model->changeDetails = [];
                $n                    = 0;
                foreach ($map['change_details'] as $item) {
                    $model->changeDetails[$n++] = null !== $item ? changeDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['refund_details'])) {
            if (!empty($map['refund_details'])) {
                $model->refundDetails = [];
                $n                    = 0;
                foreach ($map['refund_details'] as $item) {
                    $model->refundDetails[$n++] = null !== $item ? refundDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
