<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class RevokeUserSessionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 12345678
     *
     * @var string
     */
    public $externalIds;

    /**
     * @description This parameter is required.
     *
     * @example idp-cfg9vcrqylo39c39uxnw
     *
     * @var string
     */
    public $idpId;
    protected $_name = [
        'externalIds' => 'ExternalIds',
        'idpId'       => 'IdpId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalIds) {
            $res['ExternalIds'] = $this->externalIds;
        }
        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeUserSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalIds'])) {
            $model->externalIds = $map['ExternalIds'];
        }
        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
        }

        return $model;
    }
}
