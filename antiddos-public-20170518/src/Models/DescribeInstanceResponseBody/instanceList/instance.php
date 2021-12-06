<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeInstanceResponseBody\instanceList;

use AlibabaCloud\Tea\Model;

class instance extends Model
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
    public $instanceId;

    /**
     * @var string
     */
    public $instanceIp;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var bool
     */
    public $isBgppack;
    protected $_name = [
        'blackholeThreshold'  => 'BlackholeThreshold',
        'defenseBpsThreshold' => 'DefenseBpsThreshold',
        'defensePpsThreshold' => 'DefensePpsThreshold',
        'elasticThreshold'    => 'ElasticThreshold',
        'instanceId'          => 'InstanceId',
        'instanceIp'          => 'InstanceIp',
        'instanceName'        => 'InstanceName',
        'instanceStatus'      => 'InstanceStatus',
        'instanceType'        => 'InstanceType',
        'ipVersion'           => 'IpVersion',
        'isBgppack'           => 'IsBgppack',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIp) {
            $res['InstanceIp'] = $this->instanceIp;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->isBgppack) {
            $res['IsBgppack'] = $this->isBgppack;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIp'])) {
            $model->instanceIp = $map['InstanceIp'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IsBgppack'])) {
            $model->isBgppack = $map['IsBgppack'];
        }

        return $model;
    }
}
