<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceIpAddressResponseBody\instanceList;

use AlibabaCloud\Tea\Model;

class ipAddressConfig extends Model
{
    /**
     * @var int
     */
    public $blackholeThreshold;

    /**
     * @var int
     */
    public $defenseBpsThreshold;

    /**
     * @var int
     */
    public $defensePpsThreshold;

    /**
     * @var int
     */
    public $elasticThreshold;

    /**
     * @var string
     */
    public $instanceIp;

    /**
     * @var string
     */
    public $ipStatus;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var bool
     */
    public $isBgppack;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'blackholeThreshold'  => 'BlackholeThreshold',
        'defenseBpsThreshold' => 'DefenseBpsThreshold',
        'defensePpsThreshold' => 'DefensePpsThreshold',
        'elasticThreshold'    => 'ElasticThreshold',
        'instanceIp'          => 'InstanceIp',
        'ipStatus'            => 'IpStatus',
        'ipVersion'           => 'IpVersion',
        'isBgppack'           => 'IsBgppack',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackholeThreshold) {
            $res['BlackholeThreshold'] = $this->blackholeThreshold;
        }
        if (null !== $this->defenseBpsThreshold) {
            $res['DefenseBpsThreshold'] = $this->defenseBpsThreshold;
        }
        if (null !== $this->defensePpsThreshold) {
            $res['DefensePpsThreshold'] = $this->defensePpsThreshold;
        }
        if (null !== $this->elasticThreshold) {
            $res['ElasticThreshold'] = $this->elasticThreshold;
        }
        if (null !== $this->instanceIp) {
            $res['InstanceIp'] = $this->instanceIp;
        }
        if (null !== $this->ipStatus) {
            $res['IpStatus'] = $this->ipStatus;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->isBgppack) {
            $res['IsBgppack'] = $this->isBgppack;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipAddressConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackholeThreshold'])) {
            $model->blackholeThreshold = $map['BlackholeThreshold'];
        }
        if (isset($map['DefenseBpsThreshold'])) {
            $model->defenseBpsThreshold = $map['DefenseBpsThreshold'];
        }
        if (isset($map['DefensePpsThreshold'])) {
            $model->defensePpsThreshold = $map['DefensePpsThreshold'];
        }
        if (isset($map['ElasticThreshold'])) {
            $model->elasticThreshold = $map['ElasticThreshold'];
        }
        if (isset($map['InstanceIp'])) {
            $model->instanceIp = $map['InstanceIp'];
        }
        if (isset($map['IpStatus'])) {
            $model->ipStatus = $map['IpStatus'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IsBgppack'])) {
            $model->isBgppack = $map['IsBgppack'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
