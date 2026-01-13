<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody\configs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionResponseBody\configs\recallConfigs\operators;

class recallConfigs extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extendedConfig;

    /**
     * @var string
     */
    public $itemConditionArray;

    /**
     * @var string
     */
    public $itemVectorField;

    /**
     * @var string
     */
    public $itemVectorRecallManagementTableId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var operators[]
     */
    public $operators;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $recallManagementServiceVersionConfigId;

    /**
     * @var string
     */
    public $recallManagementTableId;

    /**
     * @var string
     */
    public $recallType;

    /**
     * @var string
     */
    public $userVectorField;

    /**
     * @var string
     */
    public $userVectorRecallManagementTableId;
    protected $_name = [
        'description' => 'Description',
        'extendedConfig' => 'ExtendedConfig',
        'itemConditionArray' => 'ItemConditionArray',
        'itemVectorField' => 'ItemVectorField',
        'itemVectorRecallManagementTableId' => 'ItemVectorRecallManagementTableId',
        'name' => 'Name',
        'operators' => 'Operators',
        'priority' => 'Priority',
        'recallManagementServiceVersionConfigId' => 'RecallManagementServiceVersionConfigId',
        'recallManagementTableId' => 'RecallManagementTableId',
        'recallType' => 'RecallType',
        'userVectorField' => 'UserVectorField',
        'userVectorRecallManagementTableId' => 'UserVectorRecallManagementTableId',
    ];

    public function validate()
    {
        if (\is_array($this->operators)) {
            Model::validateArray($this->operators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->extendedConfig) {
            $res['ExtendedConfig'] = $this->extendedConfig;
        }

        if (null !== $this->itemConditionArray) {
            $res['ItemConditionArray'] = $this->itemConditionArray;
        }

        if (null !== $this->itemVectorField) {
            $res['ItemVectorField'] = $this->itemVectorField;
        }

        if (null !== $this->itemVectorRecallManagementTableId) {
            $res['ItemVectorRecallManagementTableId'] = $this->itemVectorRecallManagementTableId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operators) {
            if (\is_array($this->operators)) {
                $res['Operators'] = [];
                $n1 = 0;
                foreach ($this->operators as $item1) {
                    $res['Operators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->recallManagementServiceVersionConfigId) {
            $res['RecallManagementServiceVersionConfigId'] = $this->recallManagementServiceVersionConfigId;
        }

        if (null !== $this->recallManagementTableId) {
            $res['RecallManagementTableId'] = $this->recallManagementTableId;
        }

        if (null !== $this->recallType) {
            $res['RecallType'] = $this->recallType;
        }

        if (null !== $this->userVectorField) {
            $res['UserVectorField'] = $this->userVectorField;
        }

        if (null !== $this->userVectorRecallManagementTableId) {
            $res['UserVectorRecallManagementTableId'] = $this->userVectorRecallManagementTableId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExtendedConfig'])) {
            $model->extendedConfig = $map['ExtendedConfig'];
        }

        if (isset($map['ItemConditionArray'])) {
            $model->itemConditionArray = $map['ItemConditionArray'];
        }

        if (isset($map['ItemVectorField'])) {
            $model->itemVectorField = $map['ItemVectorField'];
        }

        if (isset($map['ItemVectorRecallManagementTableId'])) {
            $model->itemVectorRecallManagementTableId = $map['ItemVectorRecallManagementTableId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Operators'])) {
            if (!empty($map['Operators'])) {
                $model->operators = [];
                $n1 = 0;
                foreach ($map['Operators'] as $item1) {
                    $model->operators[$n1] = operators::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RecallManagementServiceVersionConfigId'])) {
            $model->recallManagementServiceVersionConfigId = $map['RecallManagementServiceVersionConfigId'];
        }

        if (isset($map['RecallManagementTableId'])) {
            $model->recallManagementTableId = $map['RecallManagementTableId'];
        }

        if (isset($map['RecallType'])) {
            $model->recallType = $map['RecallType'];
        }

        if (isset($map['UserVectorField'])) {
            $model->userVectorField = $map['UserVectorField'];
        }

        if (isset($map['UserVectorRecallManagementTableId'])) {
            $model->userVectorRecallManagementTableId = $map['UserVectorRecallManagementTableId'];
        }

        return $model;
    }
}
