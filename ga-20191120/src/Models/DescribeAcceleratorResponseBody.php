<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\basicBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeAcceleratorResponseBody\crossDomainBandwidthPackage;
use AlibabaCloud\Tea\Model;

class DescribeAcceleratorResponseBody extends Model
{
    /**
     * @var string
     */
    public $ddosId;

    /**
     * @var string
     */
    public $dnsName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var crossDomainBandwidthPackage
     */
    public $crossDomainBandwidthPackage;

    /**
     * @var string
     */
    public $secondDnsName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var basicBandwidthPackage
     */
    public $basicBandwidthPackage;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $acceleratorId;
    protected $_name = [
        'ddosId'                      => 'DdosId',
        'dnsName'                     => 'DnsName',
        'description'                 => 'Description',
        'requestId'                   => 'RequestId',
        'instanceChargeType'          => 'InstanceChargeType',
        'createTime'                  => 'CreateTime',
        'crossDomainBandwidthPackage' => 'CrossDomainBandwidthPackage',
        'secondDnsName'               => 'SecondDnsName',
        'name'                        => 'Name',
        'basicBandwidthPackage'       => 'BasicBandwidthPackage',
        'state'                       => 'State',
        'expiredTime'                 => 'ExpiredTime',
        'cenId'                       => 'CenId',
        'regionId'                    => 'RegionId',
        'spec'                        => 'Spec',
        'acceleratorId'               => 'AcceleratorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosId) {
            $res['DdosId'] = $this->ddosId;
        }
        if (null !== $this->dnsName) {
            $res['DnsName'] = $this->dnsName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->crossDomainBandwidthPackage) {
            $res['CrossDomainBandwidthPackage'] = null !== $this->crossDomainBandwidthPackage ? $this->crossDomainBandwidthPackage->toMap() : null;
        }
        if (null !== $this->secondDnsName) {
            $res['SecondDnsName'] = $this->secondDnsName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->basicBandwidthPackage) {
            $res['BasicBandwidthPackage'] = null !== $this->basicBandwidthPackage ? $this->basicBandwidthPackage->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAcceleratorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosId'])) {
            $model->ddosId = $map['DdosId'];
        }
        if (isset($map['DnsName'])) {
            $model->dnsName = $map['DnsName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossDomainBandwidthPackage'])) {
            $model->crossDomainBandwidthPackage = crossDomainBandwidthPackage::fromMap($map['CrossDomainBandwidthPackage']);
        }
        if (isset($map['SecondDnsName'])) {
            $model->secondDnsName = $map['SecondDnsName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['BasicBandwidthPackage'])) {
            $model->basicBandwidthPackage = basicBandwidthPackage::fromMap($map['BasicBandwidthPackage']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        return $model;
    }
}
