<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\CreateFileSystemRequest;

use AlibabaCloud\Tea\Model;

class orderDetails extends Model
{
    /**
     * @description The billing method of the NAS file system. Valid values:
     *
     *   PrePaid: subscription. This billing method is not supported.
     *   PostPaid: pay-as-you-go.
     *
     * This parameter is required.
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the node.
     *
     * This parameter is required.
     * @example cn-suzhou-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The name of the file system.
     *
     * This parameter is required.
     * @example nasFile
     *
     * @var string
     */
    public $fileSystemName;

    /**
     * @description The name of the mount target.
     *
     * This parameter is required.
     * @example nasMount
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description The ID of the VPC.
     *
     * This parameter is required.
     * @example vpc-xxx
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The type of the order.
     *
     * This parameter is required.
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The storage protocol. Valid values: nsf and smb.
     *
     * This parameter is required.
     * @example nfs
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The type of the storage. Set the value to capacity.
     *
     * This parameter is required.
     * @example capacity
     *
     * @var string
     */
    public $storgeType;
    protected $_name = [
        'chargeType'        => 'ChargeType',
        'ensRegionId'       => 'EnsRegionId',
        'fileSystemName'    => 'FileSystemName',
        'mountTargetDomain' => 'MountTargetDomain',
        'networkId'         => 'NetworkId',
        'orderType'         => 'OrderType',
        'protocolType'      => 'ProtocolType',
        'storgeType'        => 'StorgeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->fileSystemName) {
            $res['FileSystemName'] = $this->fileSystemName;
        }
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->storgeType) {
            $res['StorgeType'] = $this->storgeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['FileSystemName'])) {
            $model->fileSystemName = $map['FileSystemName'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['StorgeType'])) {
            $model->storgeType = $map['StorgeType'];
        }

        return $model;
    }
}
