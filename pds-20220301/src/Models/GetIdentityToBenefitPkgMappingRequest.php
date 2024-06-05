<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetIdentityToBenefitPkgMappingRequest extends Model
{
    /**
     * @description The unique identifier of the benefit package.
     *
     * This parameter is required.
     * @example 40cb7794c9294
     *
     * @var string
     */
    public $benefitPkgId;

    /**
     * @description The unique identifier of the entity.
     *
     * This parameter is required.
     * @example user123
     *
     * @var string
     */
    public $identityId;

    /**
     * @description The type of the entity. If you want to manage the benefits of a user, set this parameter to user.
     *
     * This parameter is required.
     * @example user
     *
     * @var string
     */
    public $identityType;
    protected $_name = [
        'benefitPkgId' => 'benefit_pkg_id',
        'identityId'   => 'identity_id',
        'identityType' => 'identity_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->benefitPkgId) {
            $res['benefit_pkg_id'] = $this->benefitPkgId;
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
     * @return GetIdentityToBenefitPkgMappingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['benefit_pkg_id'])) {
            $model->benefitPkgId = $map['benefit_pkg_id'];
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
