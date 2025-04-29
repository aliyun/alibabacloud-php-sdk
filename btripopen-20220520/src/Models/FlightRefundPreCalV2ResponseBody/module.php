<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ResponseBody\module\multiRefundFeeDTOS;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundPreCalV2ResponseBody\module\refundReasonOptionDTOS;

class module extends Model
{
    /**
     * @var multiRefundFeeDTOS[]
     */
    public $multiRefundFeeDTOS;

    /**
     * @var int
     */
    public $preRefundMoney;

    /**
     * @var int
     */
    public $refundChargeFee;

    /**
     * @var refundReasonOptionDTOS[]
     */
    public $refundReasonOptionDTOS;

    /**
     * @var int
     */
    public $serviceChargeFee;
    protected $_name = [
        'multiRefundFeeDTOS' => 'multi_refund_fee_d_t_o_s',
        'preRefundMoney' => 'pre_refund_money',
        'refundChargeFee' => 'refund_charge_fee',
        'refundReasonOptionDTOS' => 'refund_reason_option_d_t_o_s',
        'serviceChargeFee' => 'service_charge_fee',
    ];

    public function validate()
    {
        if (\is_array($this->multiRefundFeeDTOS)) {
            Model::validateArray($this->multiRefundFeeDTOS);
        }
        if (\is_array($this->refundReasonOptionDTOS)) {
            Model::validateArray($this->refundReasonOptionDTOS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->multiRefundFeeDTOS) {
            if (\is_array($this->multiRefundFeeDTOS)) {
                $res['multi_refund_fee_d_t_o_s'] = [];
                $n1 = 0;
                foreach ($this->multiRefundFeeDTOS as $item1) {
                    $res['multi_refund_fee_d_t_o_s'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->refundReasonOptionDTOS)) {
                $res['refund_reason_option_d_t_o_s'] = [];
                $n1 = 0;
                foreach ($this->refundReasonOptionDTOS as $item1) {
                    $res['refund_reason_option_d_t_o_s'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->serviceChargeFee) {
            $res['service_charge_fee'] = $this->serviceChargeFee;
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
        if (isset($map['multi_refund_fee_d_t_o_s'])) {
            if (!empty($map['multi_refund_fee_d_t_o_s'])) {
                $model->multiRefundFeeDTOS = [];
                $n1 = 0;
                foreach ($map['multi_refund_fee_d_t_o_s'] as $item1) {
                    $model->multiRefundFeeDTOS[$n1++] = multiRefundFeeDTOS::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['refund_reason_option_d_t_o_s'] as $item1) {
                    $model->refundReasonOptionDTOS[$n1++] = refundReasonOptionDTOS::fromMap($item1);
                }
            }
        }

        if (isset($map['service_charge_fee'])) {
            $model->serviceChargeFee = $map['service_charge_fee'];
        }

        return $model;
    }
}
