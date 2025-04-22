<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class UpdateIdentityToBenefitPkgMappingRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $benefitPkgId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $identityType;
    protected $_name = [
        'amount' => 'amount',
        'benefitPkgId' => 'benefit_pkg_id',
        'expireTime' => 'expire_time',
        'identityId' => 'identity_id',
        'identityType' => 'identity_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
