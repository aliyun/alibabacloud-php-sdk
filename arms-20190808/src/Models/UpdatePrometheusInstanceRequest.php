<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class UpdatePrometheusInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $archiveDuration;

    /**
     * @var string
     */
    public $authFreeReadPolicy;

    /**
     * @var string
     */
    public $authFreeWritePolicy;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $enableAuthFreeRead;

    /**
     * @var bool
     */
    public $enableAuthFreeWrite;

    /**
     * @var bool
     */
    public $enableAuthToken;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $storageDuration;
    protected $_name = [
        'archiveDuration' => 'ArchiveDuration',
        'authFreeReadPolicy' => 'AuthFreeReadPolicy',
        'authFreeWritePolicy' => 'AuthFreeWritePolicy',
        'clusterId' => 'ClusterId',
        'enableAuthFreeRead' => 'EnableAuthFreeRead',
        'enableAuthFreeWrite' => 'EnableAuthFreeWrite',
        'enableAuthToken' => 'EnableAuthToken',
        'paymentType' => 'PaymentType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'storageDuration' => 'StorageDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
