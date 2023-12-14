<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class ModifyGatewayFileShareRequest extends Model
{
    /**
     * @var string
     */
    public $cacheConfig;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $indexId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'cacheConfig'   => 'CacheConfig',
        'gatewayId'     => 'GatewayId',
        'indexId'       => 'IndexId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheConfig) {
            $res['CacheConfig'] = $this->cacheConfig;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGatewayFileShareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheConfig'])) {
            $model->cacheConfig = $map['CacheConfig'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
