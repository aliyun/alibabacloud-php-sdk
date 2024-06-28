<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class RenewResourcePackageRequest extends Model
{
    /**
     * @description The renewal period of the resource plan.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The time when the resource plan takes effect. If you leave this parameter empty, the resource plan immediately takes effect by default.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2020-02-02T12:00:00Z
     *
     * @var string
     */
    public $effectiveDate;

    /**
     * @description The ID of the resource plan.
     *
     * This parameter is required.
     * @example lskd****sljhsdj
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The unit of the validity period for the resource plan. Valid values:
     *
     *   Month
     *   Year
     *
     * This parameter is required.
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;
    protected $_name = [
        'duration'      => 'Duration',
        'effectiveDate' => 'EffectiveDate',
        'instanceId'    => 'InstanceId',
        'ownerId'       => 'OwnerId',
        'pricingCycle'  => 'PricingCycle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->effectiveDate) {
            $res['EffectiveDate'] = $this->effectiveDate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewResourcePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EffectiveDate'])) {
            $model->effectiveDate = $map['EffectiveDate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        return $model;
    }
}
