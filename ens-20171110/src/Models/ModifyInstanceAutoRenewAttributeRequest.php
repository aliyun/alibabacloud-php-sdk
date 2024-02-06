<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceAutoRenewAttributeRequest extends Model
{
    /**
     * @description Specifies whether to enable the auto-renewal feature. Valid values: **True and False**. Default value: False.
     *
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period of the instance. Unit: months. Valid values: 1 to 9 and 12. This parameter is required if the AutoRenew parameter is set to true.
     *
     * @example 12
     *
     * @var string
     */
    public $duration;

    /**
     * @description The IDs of the instances. Separate IDs with semicolons (;).
     *
     * @example instance-test
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description Specifies whether to renew the instance. The **RenewalStatus** parameter has a higher priority than the **AutoRenew** parameter. If you do not specify **RenewalStatus**, the **AutoRenew** parameter is used by default.
     *
     *   AutoRenewal: Auto-renewal is enabled for the instance.
     *   Normal: Auto-renewal is disabled for the instance.
     *   NotRenewal: The instance is not renewed.
     *
     * The system no longer sends an expiration notification but sends only a renewal notification three days before the instance expires. To renew the instance, you can change the value of this parameter from NotRenewal to Normal and then manually renew the instance, or change the value of this parameter from NotRenewal to AutoRenewal.
     * @example Normal
     *
     * @var string
     */
    public $renewalStatus;
    protected $_name = [
        'autoRenew'     => 'AutoRenew',
        'duration'      => 'Duration',
        'instanceIds'   => 'InstanceIds',
        'ownerId'       => 'OwnerId',
        'renewalStatus' => 'RenewalStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceAutoRenewAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }

        return $model;
    }
}
