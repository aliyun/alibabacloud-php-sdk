<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509\Models;

use AlibabaCloud\Tea\Model;

class CreateEenterpriseDIDRequest extends Model
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
     * @example F76iBtCdYuE0DHC33a5amzv3ioUfAqjuBxgek3RwjxBZ2cGP0HDxZy0k8Hs7yNtZRmM3h3KmRn4liSH4gLOOK4P41l
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
     * @return CreateEenterpriseDIDRequest
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
