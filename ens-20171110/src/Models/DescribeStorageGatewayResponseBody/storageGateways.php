<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageGatewayResponseBody;

use AlibabaCloud\Dara\Model;

class storageGateways extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $serviceIp;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageGatewayId;

    /**
     * @var string
     */
    public $storageGatewayName;

    /**
     * @var int
     */
    public $storageGatewayType;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'serviceIp' => 'ServiceIp',
        'status' => 'Status',
        'storageGatewayId' => 'StorageGatewayId',
        'storageGatewayName' => 'StorageGatewayName',
        'storageGatewayType' => 'StorageGatewayType',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageGatewayId) {
            $res['StorageGatewayId'] = $this->storageGatewayId;
        }

        if (null !== $this->storageGatewayName) {
            $res['StorageGatewayName'] = $this->storageGatewayName;
        }

        if (null !== $this->storageGatewayType) {
            $res['StorageGatewayType'] = $this->storageGatewayType;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageGatewayId'])) {
            $model->storageGatewayId = $map['StorageGatewayId'];
        }

        if (isset($map['StorageGatewayName'])) {
            $model->storageGatewayName = $map['StorageGatewayName'];
        }

        if (isset($map['StorageGatewayType'])) {
            $model->storageGatewayType = $map['StorageGatewayType'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
