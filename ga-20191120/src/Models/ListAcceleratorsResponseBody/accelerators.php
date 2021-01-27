<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsResponseBody\accelerators\basicBandwidthPackage;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsResponseBody\accelerators\crossDomainBandwidthPackage;
use AlibabaCloud\Tea\Model;

class accelerators extends Model
{
    /**
     * @var string
     */
    public $dnsName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $secondDnsName;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $ddosId;

    /**
     * @var basicBandwidthPackage
     */
    public $basicBandwidthPackage;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var crossDomainBandwidthPackage
     */
    public $crossDomainBandwidthPackage;
    protected $_name = [
        'dnsName'                     => 'DnsName',
        'type'                        => 'Type',
        'secondDnsName'               => 'SecondDnsName',
        'spec'                        => 'Spec',
        'state'                       => 'State',
        'createTime'                  => 'CreateTime',
        'cenId'                       => 'CenId',
        'ddosId'                      => 'DdosId',
        'basicBandwidthPackage'       => 'BasicBandwidthPackage',
        'regionId'                    => 'RegionId',
        'instanceChargeType'          => 'InstanceChargeType',
        'acceleratorId'               => 'AcceleratorId',
        'description'                 => 'Description',
        'bandwidth'                   => 'Bandwidth',
        'expiredTime'                 => 'ExpiredTime',
        'name'                        => 'Name',
        'crossDomainBandwidthPackage' => 'CrossDomainBandwidthPackage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsName) {
            $res['DnsName'] = $this->dnsName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->secondDnsName) {
            $res['SecondDnsName'] = $this->secondDnsName;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->ddosId) {
            $res['DdosId'] = $this->ddosId;
        }
        if (null !== $this->basicBandwidthPackage) {
            $res['BasicBandwidthPackage'] = null !== $this->basicBandwidthPackage ? $this->basicBandwidthPackage->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->crossDomainBandwidthPackage) {
            $res['CrossDomainBandwidthPackage'] = null !== $this->crossDomainBandwidthPackage ? $this->crossDomainBandwidthPackage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accelerators
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsName'])) {
            $model->dnsName = $map['DnsName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SecondDnsName'])) {
            $model->secondDnsName = $map['SecondDnsName'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['DdosId'])) {
            $model->ddosId = $map['DdosId'];
        }
        if (isset($map['BasicBandwidthPackage'])) {
            $model->basicBandwidthPackage = basicBandwidthPackage::fromMap($map['BasicBandwidthPackage']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CrossDomainBandwidthPackage'])) {
            $model->crossDomainBandwidthPackage = crossDomainBandwidthPackage::fromMap($map['CrossDomainBandwidthPackage']);
        }

        return $model;
    }
}
