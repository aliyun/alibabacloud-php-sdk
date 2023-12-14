<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayLoggingRequest extends Model
{
    /**
     * @example gw-000eg44nmxbsfwbvq***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example logs***
     *
     * @var string
     */
    public $slsLogstore;

    /**
     * @example alex***
     *
     * @var string
     */
    public $slsProject;
    protected $_name = [
        'gatewayId'     => 'GatewayId',
        'securityToken' => 'SecurityToken',
        'slsLogstore'   => 'SlsLogstore',
        'slsProject'    => 'SlsProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayLoggingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }

        return $model;
    }
}
