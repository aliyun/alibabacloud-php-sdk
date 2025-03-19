<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class Quota extends Model
{
    /**
     * @var string
     */
    public $allocateStrategy;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var string
     */
    public $latestOperationId;

    /**
     * @var ResourceSpec
     */
    public $min;

    /**
     * @var string
     */
    public $parentQuotaId;

    /**
     * @var string
     */
    public $queueStrategy;

    /**
     * @var QuotaConfig
     */
    public $quotaConfig;

    /**
     * @var QuotaDetails
     */
    public $quotaDetails;

    /**
     * @example quota12345
     *
     * @var string
     */
    public $quotaId;

    /**
     * @example dlc-quota
     *
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string[]
     */
    public $resourceGroupIds;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var QuotaIdName[]
     */
    public $subQuotas;

    /**
     * @var WorkspaceIdName[]
     */
    public $workspaces;
    protected $_name = [
        'allocateStrategy' => 'AllocateStrategy',
        'creatorId' => 'CreatorId',
        'description' => 'Description',
        'gmtCreatedTime' => 'GmtCreatedTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'labels' => 'Labels',
        'latestOperationId' => 'LatestOperationId',
        'min' => 'Min',
        'parentQuotaId' => 'ParentQuotaId',
        'queueStrategy' => 'QueueStrategy',
        'quotaConfig' => 'QuotaConfig',
        'quotaDetails' => 'QuotaDetails',
        'quotaId' => 'QuotaId',
        'quotaName' => 'QuotaName',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'resourceGroupIds' => 'ResourceGroupIds',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'subQuotas' => 'SubQuotas',
        'workspaces' => 'Workspaces',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocateStrategy) {
            $res['AllocateStrategy'] = $this->allocateStrategy;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreatedTime) {
            $res['GmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestOperationId) {
            $res['LatestOperationId'] = $this->latestOperationId;
        }
        if (null !== $this->min) {
            $res['Min'] = null !== $this->min ? $this->min->toMap() : null;
        }
        if (null !== $this->parentQuotaId) {
            $res['ParentQuotaId'] = $this->parentQuotaId;
        }
        if (null !== $this->queueStrategy) {
            $res['QueueStrategy'] = $this->queueStrategy;
        }
        if (null !== $this->quotaConfig) {
            $res['QuotaConfig'] = null !== $this->quotaConfig ? $this->quotaConfig->toMap() : null;
        }
        if (null !== $this->quotaDetails) {
            $res['QuotaDetails'] = null !== $this->quotaDetails ? $this->quotaDetails->toMap() : null;
        }
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subQuotas) {
            $res['SubQuotas'] = [];
            if (null !== $this->subQuotas && \is_array($this->subQuotas)) {
                $n = 0;
                foreach ($this->subQuotas as $item) {
                    $res['SubQuotas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspaces) {
            $res['Workspaces'] = [];
            if (null !== $this->workspaces && \is_array($this->workspaces)) {
                $n = 0;
                foreach ($this->workspaces as $item) {
                    $res['Workspaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Quota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocateStrategy'])) {
            $model->allocateStrategy = $map['AllocateStrategy'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['GmtCreatedTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LatestOperationId'])) {
            $model->latestOperationId = $map['LatestOperationId'];
        }
        if (isset($map['Min'])) {
            $model->min = ResourceSpec::fromMap($map['Min']);
        }
        if (isset($map['ParentQuotaId'])) {
            $model->parentQuotaId = $map['ParentQuotaId'];
        }
        if (isset($map['QueueStrategy'])) {
            $model->queueStrategy = $map['QueueStrategy'];
        }
        if (isset($map['QuotaConfig'])) {
            $model->quotaConfig = QuotaConfig::fromMap($map['QuotaConfig']);
        }
        if (isset($map['QuotaDetails'])) {
            $model->quotaDetails = QuotaDetails::fromMap($map['QuotaDetails']);
        }
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = $map['ResourceGroupIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubQuotas'])) {
            if (!empty($map['SubQuotas'])) {
                $model->subQuotas = [];
                $n = 0;
                foreach ($map['SubQuotas'] as $item) {
                    $model->subQuotas[$n++] = null !== $item ? QuotaIdName::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Workspaces'])) {
            if (!empty($map['Workspaces'])) {
                $model->workspaces = [];
                $n = 0;
                foreach ($map['Workspaces'] as $item) {
                    $model->workspaces[$n++] = null !== $item ? WorkspaceIdName::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
