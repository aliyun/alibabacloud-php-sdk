<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class DeleteAbacAuthorizationRequest extends Model
{
    /**
     * @var int
     */
    public $authorizationId;

    /**
     * @var string
     */
    public $identityType;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'authorizationId' => 'AuthorizationId',
        'identityType' => 'IdentityType',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationId) {
            $res['AuthorizationId'] = $this->authorizationId;
        }

        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['AuthorizationId'])) {
            $model->authorizationId = $map['AuthorizationId'];
        }

        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
