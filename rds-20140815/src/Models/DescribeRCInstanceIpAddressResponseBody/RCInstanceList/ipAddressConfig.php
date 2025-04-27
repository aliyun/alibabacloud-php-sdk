<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceIpAddressResponseBody\RCInstanceList;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $isFullProtection;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'blackholeThreshold' => 'BlackholeThreshold',
        'defenseBpsThreshold' => 'DefenseBpsThreshold',
        'defensePpsThreshold' => 'DefensePpsThreshold',
        'elasticThreshold' => 'ElasticThreshold',
        'instanceIp' => 'InstanceIp',
        'ipStatus' => 'IpStatus',
        'ipVersion' => 'IpVersion',
        'isBgppack' => 'IsBgppack',
        'isFullProtection' => 'IsFullProtection',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->isFullProtection) {
            $res['IsFullProtection'] = $this->isFullProtection;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['IsFullProtection'])) {
            $model->isFullProtection = $map['IsFullProtection'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
