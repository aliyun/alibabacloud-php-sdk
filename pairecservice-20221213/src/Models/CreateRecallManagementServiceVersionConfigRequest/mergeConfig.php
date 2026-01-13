<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementServiceVersionConfigRequest;

use AlibabaCloud\Dara\Model;

class mergeConfig extends Model
{
    /**
     * @var string
     */
    public $extendedConfig;

    /**
     * @var string
     */
    public $filterExpression;

    /**
     * @var string[]
     */
    public $filterRecallManagementTableIds;

    /**
     * @var string
     */
    public $itemRecallManagementTableId;

    /**
     * @var string[]
     */
    public $itemTableFields;

    /**
     * @var string
     */
    public $mergeType;

    /**
     * @var string
     */
    public $recallManagementServiceVersionConfigId;
    protected $_name = [
        'extendedConfig' => 'ExtendedConfig',
        'filterExpression' => 'FilterExpression',
        'filterRecallManagementTableIds' => 'FilterRecallManagementTableIds',
        'itemRecallManagementTableId' => 'ItemRecallManagementTableId',
        'itemTableFields' => 'ItemTableFields',
        'mergeType' => 'MergeType',
        'recallManagementServiceVersionConfigId' => 'RecallManagementServiceVersionConfigId',
    ];

    public function validate()
    {
        if (\is_array($this->filterRecallManagementTableIds)) {
            Model::validateArray($this->filterRecallManagementTableIds);
        }
        if (\is_array($this->itemTableFields)) {
            Model::validateArray($this->itemTableFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendedConfig) {
            $res['ExtendedConfig'] = $this->extendedConfig;
        }

        if (null !== $this->filterExpression) {
            $res['FilterExpression'] = $this->filterExpression;
        }

        if (null !== $this->filterRecallManagementTableIds) {
            if (\is_array($this->filterRecallManagementTableIds)) {
                $res['FilterRecallManagementTableIds'] = [];
                $n1 = 0;
                foreach ($this->filterRecallManagementTableIds as $item1) {
                    $res['FilterRecallManagementTableIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemRecallManagementTableId) {
            $res['ItemRecallManagementTableId'] = $this->itemRecallManagementTableId;
        }

        if (null !== $this->itemTableFields) {
            if (\is_array($this->itemTableFields)) {
                $res['ItemTableFields'] = [];
                $n1 = 0;
                foreach ($this->itemTableFields as $item1) {
                    $res['ItemTableFields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mergeType) {
            $res['MergeType'] = $this->mergeType;
        }

        if (null !== $this->recallManagementServiceVersionConfigId) {
            $res['RecallManagementServiceVersionConfigId'] = $this->recallManagementServiceVersionConfigId;
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
        if (isset($map['ExtendedConfig'])) {
            $model->extendedConfig = $map['ExtendedConfig'];
        }

        if (isset($map['FilterExpression'])) {
            $model->filterExpression = $map['FilterExpression'];
        }

        if (isset($map['FilterRecallManagementTableIds'])) {
            if (!empty($map['FilterRecallManagementTableIds'])) {
                $model->filterRecallManagementTableIds = [];
                $n1 = 0;
                foreach ($map['FilterRecallManagementTableIds'] as $item1) {
                    $model->filterRecallManagementTableIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemRecallManagementTableId'])) {
            $model->itemRecallManagementTableId = $map['ItemRecallManagementTableId'];
        }

        if (isset($map['ItemTableFields'])) {
            if (!empty($map['ItemTableFields'])) {
                $model->itemTableFields = [];
                $n1 = 0;
                foreach ($map['ItemTableFields'] as $item1) {
                    $model->itemTableFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MergeType'])) {
            $model->mergeType = $map['MergeType'];
        }

        if (isset($map['RecallManagementServiceVersionConfigId'])) {
            $model->recallManagementServiceVersionConfigId = $map['RecallManagementServiceVersionConfigId'];
        }

        return $model;
    }
}
