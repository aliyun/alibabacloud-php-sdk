<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateEipInstanceRequest extends Model
{
    /**
     * @description The peak bandwidth of the EIP. Default value: 5. Valid values: 5 to 10000. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The description of the EIP.
     *
     * @example yourDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * This parameter is required.
     * @example cn-suzhou-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The billing method of the EIP. Set the value to **PostPaid**.
     *
     * This parameter is required.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the EIP. Set the value to **95BandwidthByMonth**.
     *
     * This parameter is required.
     * @example 95BandwidthByMonth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The Internet service provider. Valid values:
     *
     *   **cmcc**: China Mobile
     *   **unicom**: China Unicom
     *   **telecom**: China Telecom
     *
     * @example cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @description The name of the EIP.
     *
     * @example EIP1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'bandwidth'          => 'Bandwidth',
        'description'        => 'Description',
        'ensRegionId'        => 'EnsRegionId',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'isp'                => 'Isp',
        'name'               => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEipInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
