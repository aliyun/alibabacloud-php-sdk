<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrometheusInstanceRequest extends Model
{
    /**
     * @description The number of days for which data is automatically archived after the storage expires. Valid values: 60, 90, 180, and 365. 0 indicates that the data is not archived.
     *
     * @example 90
     *
     * @var int
     */
    public $archiveDuration;

    /**
     * @description The IP addresses or CIDR blocks for which password-free read is enabled. Separate multiple IP addresses with line breaks.
     *
     * @var string
     */
    public $authFreeReadPolicy;

    /**
     * @description The IP addresses or CIDR blocks for which password-free write is enabled. Separate multiple IP addresses with line breaks.
     *
     * @var string
     */
    public $authFreeWritePolicy;

    /**
     * @description The ID of the Prometheus instance.
     *
     * This parameter is required.
     * @example vpc-xxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to enable password-free read.
     *
     * @var bool
     */
    public $enableAuthFreeRead;

    /**
     * @description Specifies whether to enable password-free write.
     *
     * @var bool
     */
    public $enableAuthFreeWrite;

    /**
     * @description Specifies whether to enable access token authentication.
     *
     * @var bool
     */
    public $enableAuthToken;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The data storage duration. Unit: days.
     *
     * @example 90
     *
     * @var int
     */
    public $storageDuration;
    protected $_name = [
        'archiveDuration'     => 'ArchiveDuration',
        'authFreeReadPolicy'  => 'AuthFreeReadPolicy',
        'authFreeWritePolicy' => 'AuthFreeWritePolicy',
        'clusterId'           => 'ClusterId',
        'enableAuthFreeRead'  => 'EnableAuthFreeRead',
        'enableAuthFreeWrite' => 'EnableAuthFreeWrite',
        'enableAuthToken'     => 'EnableAuthToken',
        'paymentType'         => 'PaymentType',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'storageDuration'     => 'StorageDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveDuration) {
            $res['ArchiveDuration'] = $this->archiveDuration;
        }
        if (null !== $this->authFreeReadPolicy) {
            $res['AuthFreeReadPolicy'] = $this->authFreeReadPolicy;
        }
        if (null !== $this->authFreeWritePolicy) {
            $res['AuthFreeWritePolicy'] = $this->authFreeWritePolicy;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->enableAuthFreeRead) {
            $res['EnableAuthFreeRead'] = $this->enableAuthFreeRead;
        }
        if (null !== $this->enableAuthFreeWrite) {
            $res['EnableAuthFreeWrite'] = $this->enableAuthFreeWrite;
        }
        if (null !== $this->enableAuthToken) {
            $res['EnableAuthToken'] = $this->enableAuthToken;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->storageDuration) {
            $res['StorageDuration'] = $this->storageDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrometheusInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveDuration'])) {
            $model->archiveDuration = $map['ArchiveDuration'];
        }
        if (isset($map['AuthFreeReadPolicy'])) {
            $model->authFreeReadPolicy = $map['AuthFreeReadPolicy'];
        }
        if (isset($map['AuthFreeWritePolicy'])) {
            $model->authFreeWritePolicy = $map['AuthFreeWritePolicy'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EnableAuthFreeRead'])) {
            $model->enableAuthFreeRead = $map['EnableAuthFreeRead'];
        }
        if (isset($map['EnableAuthFreeWrite'])) {
            $model->enableAuthFreeWrite = $map['EnableAuthFreeWrite'];
        }
        if (isset($map['EnableAuthToken'])) {
            $model->enableAuthToken = $map['EnableAuthToken'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StorageDuration'])) {
            $model->storageDuration = $map['StorageDuration'];
        }

        return $model;
    }
}
