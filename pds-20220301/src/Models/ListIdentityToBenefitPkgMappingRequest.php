<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ListIdentityToBenefitPkgMappingRequest extends Model
{
    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $identityType;

    /**
     * @var bool
     */
    public $includeExpired;
    protected $_name = [
        'identityId' => 'identity_id',
        'identityType' => 'identity_type',
        'includeExpired' => 'include_expired',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
