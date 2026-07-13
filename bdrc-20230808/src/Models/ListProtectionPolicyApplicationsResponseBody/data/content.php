<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\ListProtectionPolicyApplicationsResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $applyDetail;

    /**
     * @var string
     */
    public $applyStatus;

    /**
     * @var int
     */
    public $applyTime;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $protectionPolicyId;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $subProtectionPolicyType;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'applyDetail' => 'ApplyDetail',
        'applyStatus' => 'ApplyStatus',
        'applyTime' => 'ApplyTime',
        'productType' => 'ProductType',
        'protectionPolicyId' => 'ProtectionPolicyId',
        'resourceArn' => 'ResourceArn',
        'resourceId' => 'ResourceId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceType' => 'ResourceType',
        'subProtectionPolicyType' => 'SubProtectionPolicyType',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyDetail) {
            $res['ApplyDetail'] = $this->applyDetail;
        }

        if (null !== $this->applyStatus) {
            $res['ApplyStatus'] = $this->applyStatus;
        }

        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->protectionPolicyId) {
            $res['ProtectionPolicyId'] = $this->protectionPolicyId;
        }

        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->subProtectionPolicyType) {
            $res['SubProtectionPolicyType'] = $this->subProtectionPolicyType;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ApplyDetail'])) {
            $model->applyDetail = $map['ApplyDetail'];
        }

        if (isset($map['ApplyStatus'])) {
            $model->applyStatus = $map['ApplyStatus'];
        }

        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ProtectionPolicyId'])) {
            $model->protectionPolicyId = $map['ProtectionPolicyId'];
        }

        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SubProtectionPolicyType'])) {
            $model->subProtectionPolicyType = $map['SubProtectionPolicyType'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
