<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\resourcesSpec;

use AlibabaCloud\Tea\Model;

class eipResource extends Model
{
    /**
     * @description Indicates whether the EIP is automatically created.
     *
     * @example True
     *
     * @var bool
     */
    public $autoCreate;

    /**
     * @description The maximum bandwidth of the EIP. Unit: Mbit/s.
     *
     * @example 100
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The EIP ID.
     *
     * @example eip-bp1jwtsuoiif2qf90****
     *
     * @var string
     */
    public $eipInstanceId;

    /**
     * @description The billing method of the EIP. Valid values:
     *
     *   PostPaid: pay-as-you-go.
     *   PrePaid: subscription.
     *
     * Default value: PostPaid
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the EIP. Valid values:
     *
     *   PayByBandwidth: pay by bandwidth.
     *   PayByTraffic: pay by data transfer.
     *
     * Valid values of N: 1 to 10.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;
    protected $_name = [
        'autoCreate'         => 'AutoCreate',
        'bandwidth'          => 'Bandwidth',
        'eipInstanceId'      => 'EipInstanceId',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoCreate) {
            $res['AutoCreate'] = $this->autoCreate;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoCreate'])) {
            $model->autoCreate = $map['AutoCreate'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        return $model;
    }
}
