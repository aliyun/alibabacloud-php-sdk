<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ResponseBody\module\multiRefundFeeDTOS;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ResponseBody\module\refundReasonOptionDTOS;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var multiRefundFeeDTOS[]
     */
    public $multiRefundFeeDTOS;

    /**
     * @example 10000
     *
     * @var int
     */
    public $preRefundMoney;

    /**
     * @example 100
     *
     * @var int
     */
    public $refundChargeFee;

    /**
     * @var refundReasonOptionDTOS[]
     */
    public $refundReasonOptionDTOS;

    /**
     * @example 100
     *
     * @var int
     */
    public $serviceChargeFee;
    protected $_name = [
        'multiRefundFeeDTOS'     => 'multi_refund_fee_d_t_o_s',
        'preRefundMoney'         => 'pre_refund_money',
        'refundChargeFee'        => 'refund_charge_fee',
        'refundReasonOptionDTOS' => 'refund_reason_option_d_t_o_s',
        'serviceChargeFee'       => 'service_charge_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multiRefundFeeDTOS) {
            $res['multi_refund_fee_d_t_o_s'] = [];
            if (null !== $this->multiRefundFeeDTOS && \is_array($this->multiRefundFeeDTOS)) {
                $n = 0;
                foreach ($this->multiRefundFeeDTOS as $item) {
                    $res['multi_refund_fee_d_t_o_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preRefundMoney) {
            $res['pre_refund_money'] = $this->preRefundMoney;
        }
        if (null !== $this->refundChargeFee) {
            $res['refund_charge_fee'] = $this->refundChargeFee;
        }
        if (null !== $this->refundReasonOptionDTOS) {
            $res['refund_reason_option_d_t_o_s'] = [];
            if (null !== $this->refundReasonOptionDTOS && \is_array($this->refundReasonOptionDTOS)) {
                $n = 0;
                foreach ($this->refundReasonOptionDTOS as $item) {
                    $res['refund_reason_option_d_t_o_s'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceChargeFee) {
            $res['service_charge_fee'] = $this->serviceChargeFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['multi_refund_fee_d_t_o_s'])) {
            if (!empty($map['multi_refund_fee_d_t_o_s'])) {
                $model->multiRefundFeeDTOS = [];
                $n                         = 0;
                foreach ($map['multi_refund_fee_d_t_o_s'] as $item) {
                    $model->multiRefundFeeDTOS[$n++] = null !== $item ? multiRefundFeeDTOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pre_refund_money'])) {
            $model->preRefundMoney = $map['pre_refund_money'];
        }
        if (isset($map['refund_charge_fee'])) {
            $model->refundChargeFee = $map['refund_charge_fee'];
        }
        if (isset($map['refund_reason_option_d_t_o_s'])) {
            if (!empty($map['refund_reason_option_d_t_o_s'])) {
                $model->refundReasonOptionDTOS = [];
                $n                             = 0;
                foreach ($map['refund_reason_option_d_t_o_s'] as $item) {
                    $model->refundReasonOptionDTOS[$n++] = null !== $item ? refundReasonOptionDTOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['service_charge_fee'])) {
            $model->serviceChargeFee = $map['service_charge_fee'];
        }

        return $model;
    }
}
