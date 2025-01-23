<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class GetQuotaResponseBody extends Model
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
     * @var string
     */
    public $quotaId;
    /**
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
     * @var string
     */
    public $requestId;
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
        'allocateStrategy'  => 'AllocateStrategy',
        'creatorId'         => 'CreatorId',
        'description'       => 'Description',
        'gmtCreatedTime'    => 'GmtCreatedTime',
        'gmtModifiedTime'   => 'GmtModifiedTime',
        'labels'            => 'Labels',
        'latestOperationId' => 'LatestOperationId',
        'min'               => 'Min',
        'parentQuotaId'     => 'ParentQuotaId',
        'queueStrategy'     => 'QueueStrategy',
        'quotaConfig'       => 'QuotaConfig',
        'quotaDetails'      => 'QuotaDetails',
        'quotaId'           => 'QuotaId',
        'quotaName'         => 'QuotaName',
        'reasonCode'        => 'ReasonCode',
        'reasonMessage'     => 'ReasonMessage',
        'requestId'         => 'RequestId',
        'resourceGroupIds'  => 'ResourceGroupIds',
        'resourceType'      => 'ResourceType',
        'status'            => 'Status',
        'subQuotas'         => 'SubQuotas',
        'workspaces'        => 'Workspaces',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->min) {
            $this->min->validate();
        }
        if (null !== $this->quotaConfig) {
            $this->quotaConfig->validate();
        }
        if (null !== $this->quotaDetails) {
            $this->quotaDetails->validate();
        }
        if (\is_array($this->resourceGroupIds)) {
            Model::validateArray($this->resourceGroupIds);
        }
        if (\is_array($this->subQuotas)) {
            Model::validateArray($this->subQuotas);
        }
        if (\is_array($this->workspaces)) {
            Model::validateArray($this->workspaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1            = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->latestOperationId) {
            $res['LatestOperationId'] = $this->latestOperationId;
        }

        if (null !== $this->min) {
            $res['Min'] = null !== $this->min ? $this->min->toArray($noStream) : $this->min;
        }

        if (null !== $this->parentQuotaId) {
            $res['ParentQuotaId'] = $this->parentQuotaId;
        }

        if (null !== $this->queueStrategy) {
            $res['QueueStrategy'] = $this->queueStrategy;
        }

        if (null !== $this->quotaConfig) {
            $res['QuotaConfig'] = null !== $this->quotaConfig ? $this->quotaConfig->toArray($noStream) : $this->quotaConfig;
        }

        if (null !== $this->quotaDetails) {
            $res['QuotaDetails'] = null !== $this->quotaDetails ? $this->quotaDetails->toArray($noStream) : $this->quotaDetails;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupIds) {
            if (\is_array($this->resourceGroupIds)) {
                $res['ResourceGroupIds'] = [];
                $n1                      = 0;
                foreach ($this->resourceGroupIds as $item1) {
                    $res['ResourceGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subQuotas) {
            if (\is_array($this->subQuotas)) {
                $res['SubQuotas'] = [];
                $n1               = 0;
                foreach ($this->subQuotas as $item1) {
                    $res['SubQuotas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workspaces) {
            if (\is_array($this->workspaces)) {
                $res['Workspaces'] = [];
                $n1                = 0;
                foreach ($this->workspaces as $item1) {
                    $res['Workspaces'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1            = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = Label::fromMap($item1);
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = [];
                $n1                      = 0;
                foreach ($map['ResourceGroupIds'] as $item1) {
                    $model->resourceGroupIds[$n1++] = $item1;
                }
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
                $n1               = 0;
                foreach ($map['SubQuotas'] as $item1) {
                    $model->subQuotas[$n1++] = QuotaIdName::fromMap($item1);
                }
            }
        }

        if (isset($map['Workspaces'])) {
            if (!empty($map['Workspaces'])) {
                $model->workspaces = [];
                $n1                = 0;
                foreach ($map['Workspaces'] as $item1) {
                    $model->workspaces[$n1++] = WorkspaceIdName::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
