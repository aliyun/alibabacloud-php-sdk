<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponseBody\dedicatedHostRenewAttributes;

use AlibabaCloud\Tea\Model;

class dedicatedHostRenewAttribute extends Model
{
    /**
     * @description Indicates whether the subscription dedicated host is automatically renewed along with the subscription Elastic Compute Service (ECS) instances hosted on it if the new expiration time of the renewed instances is later than the expiration time of the dedicated host. Valid values:
     *
     *   AutoRenewWithEcs: The subscription dedicated host is automatically renewed along with the subscription ECS instances hosted on it.
     *   StopRenewWithEcs: The subscription dedicated host is not automatically renewed along with the subscription ECS instances hosted on it.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenewEnabled;

    /**
     * @example StopRenewWithEcs
     *
     * @var string
     */
    public $autoRenewWithEcs;

    /**
     * @description Indicates whether the subscription dedicated host is automatically renewed. Valid values:
     *
     *   AutoRenewal: The dedicated host is automatically renewed.
     *   Normal: The dedicated host is not automatically renewed, and you will receive notifications for renewal.
     *   NotRenewal: The dedicated host is not renewed, and no expiration notification is sent. Notifications for renewal are automatically sent three days before the dedicated host expires. You can change the value of this parameter from NotRenewal to Normal for the dedicated host and manually renew it by calling the [RenewDedicatedHosts](~~93287~~) operation. Alternatively, you can set this parameter to AutoRenewal to configure the dedicated host to be automatically renewed.
     *
     * @example dh-bp165p6xk2tlw61e****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The ID of the dedicated host.
     *
     * @example 0
     *
     * @var int
     */
    public $duration;

    /**
     * @description The auto-renewal period.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description Indicates whether the subscription dedicated host is automatically renewed. Valid values:
     *
     *   true: The dedicated host is automatically renewed.
     *   false: The dedicated host is not automatically renewed.
     *
     * @example Normal
     *
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'autoRenewEnabled' => 'AutoRenewEnabled',
        'autoRenewWithEcs' => 'AutoRenewWithEcs',
        'dedicatedHostId'  => 'DedicatedHostId',
        'duration'         => 'Duration',
        'periodUnit'       => 'PeriodUnit',
        'renewalStatus'    => 'RenewalStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewEnabled) {
            $res['AutoRenewEnabled'] = $this->autoRenewEnabled;
        }
        if (null !== $this->autoRenewWithEcs) {
            $res['AutoRenewWithEcs'] = $this->autoRenewWithEcs;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostRenewAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewEnabled'])) {
            $model->autoRenewEnabled = $map['AutoRenewEnabled'];
        }
        if (isset($map['AutoRenewWithEcs'])) {
            $model->autoRenewWithEcs = $map['AutoRenewWithEcs'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        return $model;
    }
}
