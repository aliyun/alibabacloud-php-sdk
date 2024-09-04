<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509\Models;

use AlibabaCloud\Tea\Model;

class CreatePersonalDIDRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 01357967-61d1-42a9-8a90-f0dd8a161411
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example 73BUce7y51BlPFxHucfjdOLC9cdWNnPqc7pyXXJe05c2twjraDPwDm1KhmD6v1d7tUyxjYoNhXLdX18zzp5rsogU87
     *
     * @var string
     */
    public $ownerUniqueID;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'ownerUniqueID' => 'OwnerUniqueID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerUniqueID) {
            $res['OwnerUniqueID'] = $this->ownerUniqueID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePersonalDIDRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerUniqueID'])) {
            $model->ownerUniqueID = $map['OwnerUniqueID'];
        }

        return $model;
    }
}
