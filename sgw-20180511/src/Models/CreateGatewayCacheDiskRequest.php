<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayCacheDiskRequest extends Model
{
    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $cacheDiskCategory;

    /**
     * @example 60
     *
     * @var int
     */
    public $cacheDiskSizeInGB;

    /**
     * @example gw-000eg44nmxbsfwbvq***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'cacheDiskCategory' => 'CacheDiskCategory',
        'cacheDiskSizeInGB' => 'CacheDiskSizeInGB',
        'gatewayId'         => 'GatewayId',
        'performanceLevel'  => 'PerformanceLevel',
        'securityToken'     => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheDiskCategory) {
            $res['CacheDiskCategory'] = $this->cacheDiskCategory;
        }
        if (null !== $this->cacheDiskSizeInGB) {
            $res['CacheDiskSizeInGB'] = $this->cacheDiskSizeInGB;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayCacheDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheDiskCategory'])) {
            $model->cacheDiskCategory = $map['CacheDiskCategory'];
        }
        if (isset($map['CacheDiskSizeInGB'])) {
            $model->cacheDiskSizeInGB = $map['CacheDiskSizeInGB'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
