<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\DescribeInstanceResponseBody\tags;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $capacity;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $ioType;

    /**
     * @var int
     */
    public $maxEndpoint;

    /**
     * @var int
     */
    public $maxSlot;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $providerType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var InstanceStatus
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'capacity' => 'Capacity',
        'description' => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'ioType' => 'IoType',
        'maxEndpoint' => 'MaxEndpoint',
        'maxSlot' => 'MaxSlot',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'paymentType' => 'PaymentType',
        'providerType' => 'ProviderType',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'storageType' => 'StorageType',
        'tags' => 'Tags',
        'type' => 'Type',
        'userId' => 'UserId',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (null !== $this->status) {
            $this->status->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->ioType) {
            $res['IoType'] = $this->ioType;
        }

        if (null !== $this->maxEndpoint) {
            $res['MaxEndpoint'] = $this->maxEndpoint;
        }

        if (null !== $this->maxSlot) {
            $res['MaxSlot'] = $this->maxSlot;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['IoType'])) {
            $model->ioType = $map['IoType'];
        }

        if (isset($map['MaxEndpoint'])) {
            $model->maxEndpoint = $map['MaxEndpoint'];
        }

        if (isset($map['MaxSlot'])) {
            $model->maxSlot = $map['MaxSlot'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = InstanceStatus::fromMap($map['Status']);
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
