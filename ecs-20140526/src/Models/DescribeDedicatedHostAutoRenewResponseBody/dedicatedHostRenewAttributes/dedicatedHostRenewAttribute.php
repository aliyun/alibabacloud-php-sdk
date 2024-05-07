<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponseBody\dedicatedHostRenewAttributes;

use AlibabaCloud\Tea\Model;

class dedicatedHostRenewAttribute extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenewEnabled;

    /**
     * @description Indicates whether the dedicated host is automatically renewed if a subscription ECS instance it hosts, after being automatically renewed, has a new expiration time that is later than that of the dedicated host. Valid values:
     *
     *   AutoRenewWithEcs: The dedicated host is automatically renewed along with the ECS instance.
     *   StopRenewWithEcs: The dedicated host is not automatically renewed along with the ECS instance.
     *
     * @example StopRenewWithEcs
     *
     * @var string
     */
    public $autoRenewWithEcs;

    /**
     * @description The ID of the dedicated host.
     *
     * @example dh-bp165p6xk2tlw61e****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The auto-renewal period.
     *
     * @example 0
     *
     * @var int
     */
    public $duration;

    /**
     * @description The unit of the auto-renewal duration. Valid values:
     *
     *   Week
     *   Month
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description Indicates whether the subscription dedicated host is automatically renewed. Valid values:
     *
     *   AutoRenewal: The dedicated host is automatically renewed.
     *   Normal: The dedicated host is not automatically renewed, but renewal notifications are sent.
     *   NotRenewal: The dedicated host is not automatically renewed, and no expiration notification is sent. Alibaba Cloud sends only a non-renewal notice three days before the host expires. If the renewal status of a dedicated host is NotRenewal, you can change the value to Normal and then call [RenewDedicatedHosts](~~93287~~) to manually renew the dedicated host, or directly change the value to AutoRenewal.
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
