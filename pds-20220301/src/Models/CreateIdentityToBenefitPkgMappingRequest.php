<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateIdentityToBenefitPkgMappingRequest extends Model
{
    /**
     * @description The number of benefit packages.
     *
     * This parameter takes effect only for the benefit packages of the resource type. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The unique identifier of the benefit package.
     *
     * @example 40cb7794c9294
     *
     * @var string
     */
    public $benefitPkgId;

    /**
     * @description The time when the benefit package expires. Set the value to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * By default, the benefit package never expires.
     * @example 1633167071000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The unique identifier of the entity.
     *
     * If you want to manage the benefits of a user, set this parameter to a user ID.
     * @example user123
     *
     * @var string
     */
    public $identityId;

    /**
     * @description The type of the entity.
     *
     * If you want to manage the benefits of a user, set this parameter to user.
     * @example user
     *
     * @var string
     */
    public $identityType;
    protected $_name = [
        'amount'       => 'amount',
        'benefitPkgId' => 'benefit_pkg_id',
        'expireTime'   => 'expire_time',
        'identityId'   => 'identity_id',
        'identityType' => 'identity_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->benefitPkgId) {
            $res['benefit_pkg_id'] = $this->benefitPkgId;
        }
        if (null !== $this->expireTime) {
            $res['expire_time'] = $this->expireTime;
        }
        if (null !== $this->identityId) {
            $res['identity_id'] = $this->identityId;
        }
        if (null !== $this->identityType) {
            $res['identity_type'] = $this->identityType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIdentityToBenefitPkgMappingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['benefit_pkg_id'])) {
            $model->benefitPkgId = $map['benefit_pkg_id'];
        }
        if (isset($map['expire_time'])) {
            $model->expireTime = $map['expire_time'];
        }
        if (isset($map['identity_id'])) {
            $model->identityId = $map['identity_id'];
        }
        if (isset($map['identity_type'])) {
            $model->identityType = $map['identity_type'];
        }

        return $model;
    }
}
