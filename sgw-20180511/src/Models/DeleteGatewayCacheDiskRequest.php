<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewayCacheDiskRequest extends Model
{
    /**
     * @example d-bp1dcnq8zldree6ok***
     *
     * @var string
     */
    public $cacheId;

    /**
     * @example gw-0001xv7je3580031y***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example /dev/vdb
     *
     * @var string
     */
    public $localFilePath;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'cacheId'       => 'CacheId',
        'gatewayId'     => 'GatewayId',
        'localFilePath' => 'LocalFilePath',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheId) {
            $res['CacheId'] = $this->cacheId;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->localFilePath) {
            $res['LocalFilePath'] = $this->localFilePath;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewayCacheDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheId'])) {
            $model->cacheId = $map['CacheId'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['LocalFilePath'])) {
            $model->localFilePath = $map['LocalFilePath'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
