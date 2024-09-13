<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageGatewayResponseBody;

use AlibabaCloud\Tea\Model;

class storageGateways extends Model
{
    /**
     * @example 192.168.2.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @example 2024-05-14T03:07:47Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example *.*.*.*
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @example available
     *
     * @var string
     */
    public $status;

    /**
     * @example sgw-***
     *
     * @var string
     */
    public $storageGatewayId;

    /**
     * @example testGateway
     *
     * @var string
     */
    public $storageGatewayName;

    /**
     * @example 1
     *
     * @var int
     */
    public $storageGatewayType;

    /**
     * @example n-***
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'cidrBlock'          => 'CidrBlock',
        'creationTime'       => 'CreationTime',
        'description'        => 'Description',
        'ensRegionId'        => 'EnsRegionId',
        'serviceIp'          => 'ServiceIp',
        'status'             => 'Status',
        'storageGatewayId'   => 'StorageGatewayId',
        'storageGatewayName' => 'StorageGatewayName',
        'storageGatewayType' => 'StorageGatewayType',
        'vpcId'              => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return storageGateways
     */
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
