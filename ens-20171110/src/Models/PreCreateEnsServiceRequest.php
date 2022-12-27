<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PreCreateEnsServiceRequest extends Model
{
    /**
     * @example 95BandwidthByMonth
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @var string
     */
    public $buyResourcesDetail;

    /**
     * @example 100
     *
     * @var string
     */
    public $dataDiskSize;

    /**
     * @example testName
     *
     * @var string
     */
    public $ensServiceName;

    /**
     * @example centos_6_09_64_20G_alibase_****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example 40
     *
     * @var string
     */
    public $instanceBandwithdLimit;

    /**
     * @example ens.sn1.stiny
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example Big
     *
     * @var string
     */
    public $netLevel;

    /**
     * @example testPassword123
     *
     * @var string
     */
    public $password;

    /**
     * @example PriceLowPriority
     *
     * @var string
     */
    public $schedulingPriceStrategy;

    /**
     * @example Disperse
     *
     * @var string
     */
    public $schedulingStrategy;

    /**
     * @example 100
     *
     * @var string
     */
    public $systemDiskSize;

    /**
     * @example #!/bin/sh  echo "Hello World.  The time is now $(date -R)!" | tee /root/output.txt
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'bandwidthType'           => 'BandwidthType',
        'buyResourcesDetail'      => 'BuyResourcesDetail',
        'dataDiskSize'            => 'DataDiskSize',
        'ensServiceName'          => 'EnsServiceName',
        'imageId'                 => 'ImageId',
        'instanceBandwithdLimit'  => 'InstanceBandwithdLimit',
        'instanceSpec'            => 'InstanceSpec',
        'keyPairName'             => 'KeyPairName',
        'netLevel'                => 'NetLevel',
        'password'                => 'Password',
        'schedulingPriceStrategy' => 'SchedulingPriceStrategy',
        'schedulingStrategy'      => 'SchedulingStrategy',
        'systemDiskSize'          => 'SystemDiskSize',
        'userData'                => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->buyResourcesDetail) {
            $res['BuyResourcesDetail'] = $this->buyResourcesDetail;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->ensServiceName) {
            $res['EnsServiceName'] = $this->ensServiceName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceBandwithdLimit) {
            $res['InstanceBandwithdLimit'] = $this->instanceBandwithdLimit;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->netLevel) {
            $res['NetLevel'] = $this->netLevel;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->schedulingPriceStrategy) {
            $res['SchedulingPriceStrategy'] = $this->schedulingPriceStrategy;
        }
        if (null !== $this->schedulingStrategy) {
            $res['SchedulingStrategy'] = $this->schedulingStrategy;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreCreateEnsServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['BuyResourcesDetail'])) {
            $model->buyResourcesDetail = $map['BuyResourcesDetail'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['EnsServiceName'])) {
            $model->ensServiceName = $map['EnsServiceName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceBandwithdLimit'])) {
            $model->instanceBandwithdLimit = $map['InstanceBandwithdLimit'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['NetLevel'])) {
            $model->netLevel = $map['NetLevel'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['SchedulingPriceStrategy'])) {
            $model->schedulingPriceStrategy = $map['SchedulingPriceStrategy'];
        }
        if (isset($map['SchedulingStrategy'])) {
            $model->schedulingStrategy = $map['SchedulingStrategy'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
