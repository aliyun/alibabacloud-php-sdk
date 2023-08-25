<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Tea\Model;

class AllocateAnycastEipAddressRequest extends Model
{
    /**
     * @description The maximum bandwidth of the Anycast EIP. Unit: Mbit/s.
     *
     * Valid values: **200** to **1000**.
     *
     * Default value: **1000**.
     *
     * >  The maximum bandwidth value is not a guaranteed value. It indicates the upper limit of bandwidth and is for reference only.
     * @example 200
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that the value is unique among different requests. The client token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **ClientToken**. The value of **RequestId** may be different for each API request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the Anycast EIP.
     *
     * The description must be 0 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example docdesc
     *
     * @var string
     */
    public $description;

    /**
     * @description The billing method of the Anycast EIP.
     *
     * Set the value to **PostPaid**, which specifies the pay-as-you-go billing method.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the Anycast EIP.
     *
     * Set the value to **PayByTraffic**, which specifies the pay-by-data-transfer metering method.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The name of the Anycast EIP.
     *
     * The name must be 0 to 128 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). It must start with a letter.
     * @example doctest
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The access area of the Anycast EIP.
     *
     * Set the value to **international**, which specifies the regions outside the Chinese mainland.
     * @example international
     *
     * @var string
     */
    public $serviceLocation;
    protected $_name = [
        'bandwidth'          => 'Bandwidth',
        'clientToken'        => 'ClientToken',
        'description'        => 'Description',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'name'               => 'Name',
        'resourceGroupId'    => 'ResourceGroupId',
        'serviceLocation'    => 'ServiceLocation',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateAnycastEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }

        return $model;
    }
}
