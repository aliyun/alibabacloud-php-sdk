<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20200710\Models\GetDeployDetailResponseBody\data;

use AlibabaCloud\SDK\BPStudio\V20200710\Models\GetDeployDetailResponseBody\data\resourceList\operation;
use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @var string
     */
    public $buyDuration;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $executionStrategy;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $monitorURL;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var operation
     */
    public $operation;

    /**
     * @var int
     */
    public $refId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceCode;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'buyDuration'       => 'BuyDuration',
        'chargeType'        => 'ChargeType',
        'executionStrategy' => 'ExecutionStrategy',
        'modifiedTime'      => 'ModifiedTime',
        'monitorURL'        => 'MonitorURL',
        'nodeName'          => 'NodeName',
        'operation'         => 'Operation',
        'refId'             => 'RefId',
        'remark'            => 'Remark',
        'resourceCode'      => 'ResourceCode',
        'resourceId'        => 'ResourceId',
        'resourceType'      => 'ResourceType',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyDuration) {
            $res['BuyDuration'] = $this->buyDuration;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->executionStrategy) {
            $res['ExecutionStrategy'] = $this->executionStrategy;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->monitorURL) {
            $res['MonitorURL'] = $this->monitorURL;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->operation) {
            $res['Operation'] = null !== $this->operation ? $this->operation->toMap() : null;
        }
        if (null !== $this->refId) {
            $res['RefId'] = $this->refId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceCode) {
            $res['ResourceCode'] = $this->resourceCode;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyDuration'])) {
            $model->buyDuration = $map['BuyDuration'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ExecutionStrategy'])) {
            $model->executionStrategy = $map['ExecutionStrategy'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['MonitorURL'])) {
            $model->monitorURL = $map['MonitorURL'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Operation'])) {
            $model->operation = operation::fromMap($map['Operation']);
        }
        if (isset($map['RefId'])) {
            $model->refId = $map['RefId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceCode'])) {
            $model->resourceCode = $map['ResourceCode'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
