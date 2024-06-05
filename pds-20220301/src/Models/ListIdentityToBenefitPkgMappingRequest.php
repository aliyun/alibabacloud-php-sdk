<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListIdentityToBenefitPkgMappingRequest extends Model
{
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
     * @description The type of the entity. If you call this operation to manage the benefits of a user, set this parameter to user.
     *
     * This parameter is required.
     * @example user
     *
     * @var string
     */
    public $identityType;

    /**
     * @description Specifies whether to return the benefit packages that expire. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $includeExpired;
    protected $_name = [
        'identityId'     => 'identity_id',
        'identityType'   => 'identity_type',
        'includeExpired' => 'include_expired',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityId) {
            $res['identity_id'] = $this->identityId;
        }
        if (null !== $this->identityType) {
            $res['identity_type'] = $this->identityType;
        }
        if (null !== $this->includeExpired) {
            $res['include_expired'] = $this->includeExpired;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIdentityToBenefitPkgMappingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['identity_id'])) {
            $model->identityId = $map['identity_id'];
        }
        if (isset($map['identity_type'])) {
            $model->identityType = $map['identity_type'];
        }
        if (isset($map['include_expired'])) {
            $model->includeExpired = $map['include_expired'];
        }

        return $model;
    }
}
