<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponseBody\kmsInstance\bindVpcs;

class kmsInstance extends Model
{
    /**
     * @var bindVpcs
     */
    public $bindVpcs;

    /**
     * @var string
     */
    public $caCertificateChainPem;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $keyNum;

    /**
     * @var int
     */
    public $log;

    /**
     * @var int
     */
    public $logStorage;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @var string
     */
    public $saleStatus;

    /**
     * @var string
     */
    public $secretNum;

    /**
     * @var int
     */
    public $spec;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $vpcNum;

    /**
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @var string[]
     */
    public $zoneIds;
    protected $_name = [
        'bindVpcs' => 'BindVpcs',
        'caCertificateChainPem' => 'CaCertificateChainPem',
        'chargeType' => 'ChargeType',
        'createTime' => 'CreateTime',
        'endDate' => 'EndDate',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'keyNum' => 'KeyNum',
        'log' => 'Log',
        'logStorage' => 'LogStorage',
        'productType' => 'ProductType',
        'productVersion' => 'ProductVersion',
        'saleStatus' => 'SaleStatus',
        'secretNum' => 'SecretNum',
        'spec' => 'Spec',
        'startDate' => 'StartDate',
        'status' => 'Status',
        'vpcId' => 'VpcId',
        'vpcNum' => 'VpcNum',
        'vswitchIds' => 'VswitchIds',
        'zoneIds' => 'ZoneIds',
    ];

    public function validate()
    {
        if (null !== $this->bindVpcs) {
            $this->bindVpcs->validate();
        }
        if (\is_array($this->vswitchIds)) {
            Model::validateArray($this->vswitchIds);
        }
        if (\is_array($this->zoneIds)) {
            Model::validateArray($this->zoneIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindVpcs) {
            $res['BindVpcs'] = null !== $this->bindVpcs ? $this->bindVpcs->toArray($noStream) : $this->bindVpcs;
        }

        if (null !== $this->caCertificateChainPem) {
            $res['CaCertificateChainPem'] = $this->caCertificateChainPem;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->keyNum) {
            $res['KeyNum'] = $this->keyNum;
        }

        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }

        if (null !== $this->logStorage) {
            $res['LogStorage'] = $this->logStorage;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }

        if (null !== $this->saleStatus) {
            $res['SaleStatus'] = $this->saleStatus;
        }

        if (null !== $this->secretNum) {
            $res['SecretNum'] = $this->secretNum;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcNum) {
            $res['VpcNum'] = $this->vpcNum;
        }

        if (null !== $this->vswitchIds) {
            if (\is_array($this->vswitchIds)) {
                $res['VswitchIds'] = [];
                $n1 = 0;
                foreach ($this->vswitchIds as $item1) {
                    $res['VswitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneIds) {
            if (\is_array($this->zoneIds)) {
                $res['ZoneIds'] = [];
                $n1 = 0;
                foreach ($this->zoneIds as $item1) {
                    $res['ZoneIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BindVpcs'])) {
            $model->bindVpcs = bindVpcs::fromMap($map['BindVpcs']);
        }

        if (isset($map['CaCertificateChainPem'])) {
            $model->caCertificateChainPem = $map['CaCertificateChainPem'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['KeyNum'])) {
            $model->keyNum = $map['KeyNum'];
        }

        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }

        if (isset($map['LogStorage'])) {
            $model->logStorage = $map['LogStorage'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }

        if (isset($map['SaleStatus'])) {
            $model->saleStatus = $map['SaleStatus'];
        }

        if (isset($map['SecretNum'])) {
            $model->secretNum = $map['SecretNum'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcNum'])) {
            $model->vpcNum = $map['VpcNum'];
        }

        if (isset($map['VswitchIds'])) {
            if (!empty($map['VswitchIds'])) {
                $model->vswitchIds = [];
                $n1 = 0;
                foreach ($map['VswitchIds'] as $item1) {
                    $model->vswitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneIds'])) {
            if (!empty($map['ZoneIds'])) {
                $model->zoneIds = [];
                $n1 = 0;
                foreach ($map['ZoneIds'] as $item1) {
                    $model->zoneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
