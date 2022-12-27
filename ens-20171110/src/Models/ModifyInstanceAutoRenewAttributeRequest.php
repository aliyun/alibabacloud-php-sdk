<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceAutoRenewAttributeRequest extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @example 12
     *
     * @var string
     */
    public $duration;

    /**
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
