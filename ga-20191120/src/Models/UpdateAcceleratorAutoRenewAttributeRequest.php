<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class UpdateAcceleratorAutoRenewAttributeRequest extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description Specifies whether to enable auto-renewal for the GA instance. Default value: false. Valid values:
     *
     *   **true**: enables auto-renewal for the GA instance.
     *   **false**: does not enable auto-renewal for the GA instance.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period. Unit: months.
     *
     * Valid values: **1** to **12**.
     *
     * >  This parameter is required only if **AutoRenew** is set to **true**.
     * @example 1
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate a token, but you must make sure that it is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The name of the GA instance.
     *
     * The name must be 2 to 128 characters in length and can contain digits, underscores (\_), and hyphens (-). It must start with a letter.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies how to renew the GA instance. Valid values:
     *
     *   **AutoRenewal**: The GA instance is automatically renewed.
     *   **Normal**: You must manually renew the GA instance.
     *   **NotRenewal**: Choose this option if you do not want to renew the GA instance after the instance expires. The system sends only a non-renewal reminder three days before the expiration date. The system no longer sends notifications to remind you to renew the GA instance. You can change the value of this parameter from NotRenewal to **Normal** for a GA instance, and then manually renew the instance. You can also set the RenewalStatus parameter to **AutoRenewal**.
     *
     * >  **RenewalStatus** takes precedence over **AutoRenew**. If you do not specify **RenewalStatus**, the **AutoRenew** parameter is used by default.
     * @example Normal
     *
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'acceleratorId'     => 'AcceleratorId',
        'autoRenew'         => 'AutoRenew',
        'autoRenewDuration' => 'AutoRenewDuration',
        'clientToken'       => 'ClientToken',
        'name'              => 'Name',
        'regionId'          => 'RegionId',
        'renewalStatus'     => 'RenewalStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAcceleratorAutoRenewAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        return $model;
    }
}
