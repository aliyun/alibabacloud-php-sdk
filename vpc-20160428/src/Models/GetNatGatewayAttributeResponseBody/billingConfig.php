<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class billingConfig extends Model
{
    /**
     * @description Indicates whether automatic payment is enabled. If the **InstanceChargeType** parameter is set to **PrePaid**, one of the following values is returned:
     *
     *   **false**: disabled. After an order is generated, you must go to the Order Center to complete the payment.
     *   **true**: enabled. Payments are automatically completed.
     *
     * The return value of this parameter is empty if **InstanceChargeType** is set to **PostPaid**.
     * @example false
     *
     * @var string
     */
    public $autoPay;

    /**
     * @description The billing method of the NAT gateway. The value is set to **PostPaid**, which indicates the pay-as-you-go billing method.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the NAT gateway. Valid values:
     *
     *   **PayBySpec**: pay-by-specification
     *   **PayByLcu**: pay-by-CU
     *
     * @example PayBySpec
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The specification of the Internet NAT gateway. If the **InternetChargeType** parameter is set to **PayBySpec**, one of the following values is returned:
     *
     *   **Small**: small
     *
     *   **Middle**: medium
     *
     *   **Large**: large
     *
     * The return value of this parameter is empty if **InternetChargeType** is set to **PayByLcu**.
     * @example Small
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'autoPay'            => 'AutoPay',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'spec'               => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return billingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
