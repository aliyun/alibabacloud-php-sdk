<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class RemoveSharesFromExpressSyncRequest extends Model
{
    /**
     * @example sync-0001xv7je357xn8tr***
     *
     * @var string
     */
    public $expressSyncId;

    /**
     * @example {"gw-000gwgp0j3jp8cb3t***":"share1,share2","gw-0001b2otnkdzte62j***":"weekly"}
     *
     * @var string
     */
    public $gatewayShares;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'expressSyncId' => 'ExpressSyncId',
        'gatewayShares' => 'GatewayShares',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressSyncId) {
            $res['ExpressSyncId'] = $this->expressSyncId;
        }
        if (null !== $this->gatewayShares) {
            $res['GatewayShares'] = $this->gatewayShares;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveSharesFromExpressSyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpressSyncId'])) {
            $model->expressSyncId = $map['ExpressSyncId'];
        }
        if (isset($map['GatewayShares'])) {
            $model->gatewayShares = $map['GatewayShares'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
