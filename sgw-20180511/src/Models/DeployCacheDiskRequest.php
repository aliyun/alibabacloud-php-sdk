<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DeployCacheDiskRequest extends Model
{
    /**
     * @var string
     */
    public $cacheConfig;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $sizeInGB;
    protected $_name = [
        'cacheConfig'   => 'CacheConfig',
        'diskCategory'  => 'DiskCategory',
        'gatewayId'     => 'GatewayId',
        'securityToken' => 'SecurityToken',
        'sizeInGB'      => 'SizeInGB',
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
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->sizeInGB) {
            $res['SizeInGB'] = $this->sizeInGB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployCacheDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheConfig'])) {
            $model->cacheConfig = $map['CacheConfig'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SizeInGB'])) {
            $model->sizeInGB = $map['SizeInGB'];
        }

        return $model;
    }
}
