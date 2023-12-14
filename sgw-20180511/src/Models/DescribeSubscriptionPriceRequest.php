<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubscriptionPriceRequest extends Model
{
    /**
     * @var int
     */
    public $cacheCloudEfficiencySize;

    /**
     * @var int
     */
    public $cacheESSDPl1Size;

    /**
     * @var int
     */
    public $cacheSSDSize;

    /**
     * @var string
     */
    public $gatewayClass;

    /**
     * @var int
     */
    public $periodQuantity;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'cacheCloudEfficiencySize' => 'CacheCloudEfficiencySize',
        'cacheESSDPl1Size'         => 'CacheESSDPl1Size',
        'cacheSSDSize'             => 'CacheSSDSize',
        'gatewayClass'             => 'GatewayClass',
        'periodQuantity'           => 'PeriodQuantity',
        'periodUnit'               => 'PeriodUnit',
        'regionId'                 => 'RegionId',
        'securityToken'            => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheCloudEfficiencySize) {
            $res['CacheCloudEfficiencySize'] = $this->cacheCloudEfficiencySize;
        }
        if (null !== $this->cacheESSDPl1Size) {
            $res['CacheESSDPl1Size'] = $this->cacheESSDPl1Size;
        }
        if (null !== $this->cacheSSDSize) {
            $res['CacheSSDSize'] = $this->cacheSSDSize;
        }
        if (null !== $this->gatewayClass) {
            $res['GatewayClass'] = $this->gatewayClass;
        }
        if (null !== $this->periodQuantity) {
            $res['PeriodQuantity'] = $this->periodQuantity;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscriptionPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheCloudEfficiencySize'])) {
            $model->cacheCloudEfficiencySize = $map['CacheCloudEfficiencySize'];
        }
        if (isset($map['CacheESSDPl1Size'])) {
            $model->cacheESSDPl1Size = $map['CacheESSDPl1Size'];
        }
        if (isset($map['CacheSSDSize'])) {
            $model->cacheSSDSize = $map['CacheSSDSize'];
        }
        if (isset($map['GatewayClass'])) {
            $model->gatewayClass = $map['GatewayClass'];
        }
        if (isset($map['PeriodQuantity'])) {
            $model->periodQuantity = $map['PeriodQuantity'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
