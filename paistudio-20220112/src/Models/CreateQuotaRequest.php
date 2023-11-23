<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateQuotaRequest extends Model
{
    /**
     * @example ByNodeSpecs
     *
     * @var string
     */
    public $allocateStrategy;

    /**
     * @example this is a test quota
     *
     * @var string
     */
    public $description;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var ResourceSpec
     */
    public $min;

    /**
     * @example quota1ci8g793pgm
     *
     * @var string
     */
    public $parentQuotaId;

    /**
     * @example PaiStrategyIntelligent
     *
     * @var string
     */
    public $queueStrategy;

    /**
     * @var QuotaConfig
     */
    public $quotaConfig;

    /**
     * @example test-quota
     *
     * @var string
     */
    public $quotaName;

    /**
     * @var string[]
     */
    public $resourceGroupIds;

    /**
     * @example ECS
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'allocateStrategy' => 'AllocateStrategy',
        'description'      => 'Description',
        'labels'           => 'Labels',
        'min'              => 'Min',
        'parentQuotaId'    => 'ParentQuotaId',
        'queueStrategy'    => 'QueueStrategy',
        'quotaConfig'      => 'QuotaConfig',
        'quotaName'        => 'QuotaName',
        'resourceGroupIds' => 'ResourceGroupIds',
        'resourceType'     => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocateStrategy) {
            $res['AllocateStrategy'] = $this->allocateStrategy;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocateStrategy'])) {
            $model->allocateStrategy = $map['AllocateStrategy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
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
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }
        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = $map['ResourceGroupIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
