<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class PreCreateEnsServiceRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $ensServiceName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $bandwidthType;

    /**
     * @var string
     */
    public $instanceBandwithdLimit;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $netLevel;

    /**
     * @var string
     */
    public $schedulingStrategy;

    /**
     * @var string
     */
    public $schedulingPriceStrategy;

    /**
     * @var string
     */
    public $buyResourcesDetail;
    protected $_name = [
        'version'                 => 'Version',
        'ensServiceName'          => 'EnsServiceName',
        'imageId'                 => 'ImageId',
        'instanceSpec'            => 'InstanceSpec',
        'systemDiskSize'          => 'SystemDiskSize',
        'dataDiskSize'            => 'DataDiskSize',
        'bandwidthType'           => 'BandwidthType',
        'instanceBandwithdLimit'  => 'InstanceBandwithdLimit',
        'password'                => 'Password',
        'keyPairName'             => 'KeyPairName',
        'userData'                => 'UserData',
        'netLevel'                => 'NetLevel',
        'schedulingStrategy'      => 'SchedulingStrategy',
        'schedulingPriceStrategy' => 'SchedulingPriceStrategy',
        'buyResourcesDetail'      => 'BuyResourcesDetail',
    ];

    public function validate()
    {
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('ensServiceName', $this->ensServiceName, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('instanceSpec', $this->instanceSpec, true);
        Model::validateRequired('systemDiskSize', $this->systemDiskSize, true);
        Model::validateRequired('bandwidthType', $this->bandwidthType, true);
        Model::validateRequired('instanceBandwithdLimit', $this->instanceBandwithdLimit, true);
        Model::validateRequired('netLevel', $this->netLevel, true);
        Model::validateRequired('schedulingStrategy', $this->schedulingStrategy, true);
        Model::validateRequired('buyResourcesDetail', $this->buyResourcesDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->ensServiceName) {
            $res['EnsServiceName'] = $this->ensServiceName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->instanceBandwithdLimit) {
            $res['InstanceBandwithdLimit'] = $this->instanceBandwithdLimit;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->netLevel) {
            $res['NetLevel'] = $this->netLevel;
        }
        if (null !== $this->schedulingStrategy) {
            $res['SchedulingStrategy'] = $this->schedulingStrategy;
        }
        if (null !== $this->schedulingPriceStrategy) {
            $res['SchedulingPriceStrategy'] = $this->schedulingPriceStrategy;
        }
        if (null !== $this->buyResourcesDetail) {
            $res['BuyResourcesDetail'] = $this->buyResourcesDetail;
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['EnsServiceName'])) {
            $model->ensServiceName = $map['EnsServiceName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['InstanceBandwithdLimit'])) {
            $model->instanceBandwithdLimit = $map['InstanceBandwithdLimit'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['NetLevel'])) {
            $model->netLevel = $map['NetLevel'];
        }
        if (isset($map['SchedulingStrategy'])) {
            $model->schedulingStrategy = $map['SchedulingStrategy'];
        }
        if (isset($map['SchedulingPriceStrategy'])) {
            $model->schedulingPriceStrategy = $map['SchedulingPriceStrategy'];
        }
        if (isset($map['BuyResourcesDetail'])) {
            $model->buyResourcesDetail = $map['BuyResourcesDetail'];
        }

        return $model;
    }
}
