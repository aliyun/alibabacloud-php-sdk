<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementTableRequest\fields;

class CreateRecallManagementTableRequest extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableDataSizeFluctuationThreshold;

    /**
     * @var bool
     */
    public $enableRowCountFluctuationThreshold;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxDataSizeFluctuationThreshold;

    /**
     * @var int
     */
    public $maxRowCountFluctuationThreshold;

    /**
     * @var string
     */
    public $maxcomputeProjectName;

    /**
     * @var string
     */
    public $maxcomputeSchema;

    /**
     * @var string
     */
    public $maxcomputeTableName;

    /**
     * @var int
     */
    public $minDataSizeFluctuationThreshold;

    /**
     * @var int
     */
    public $minRowCountFluctuationThreshold;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $recallType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'dataSource' => 'DataSource',
        'description' => 'Description',
        'enableDataSizeFluctuationThreshold' => 'EnableDataSizeFluctuationThreshold',
        'enableRowCountFluctuationThreshold' => 'EnableRowCountFluctuationThreshold',
        'fields' => 'Fields',
        'instanceId' => 'InstanceId',
        'maxDataSizeFluctuationThreshold' => 'MaxDataSizeFluctuationThreshold',
        'maxRowCountFluctuationThreshold' => 'MaxRowCountFluctuationThreshold',
        'maxcomputeProjectName' => 'MaxcomputeProjectName',
        'maxcomputeSchema' => 'MaxcomputeSchema',
        'maxcomputeTableName' => 'MaxcomputeTableName',
        'minDataSizeFluctuationThreshold' => 'MinDataSizeFluctuationThreshold',
        'minRowCountFluctuationThreshold' => 'MinRowCountFluctuationThreshold',
        'name' => 'Name',
        'recallType' => 'RecallType',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableDataSizeFluctuationThreshold) {
            $res['EnableDataSizeFluctuationThreshold'] = $this->enableDataSizeFluctuationThreshold;
        }

        if (null !== $this->enableRowCountFluctuationThreshold) {
            $res['EnableRowCountFluctuationThreshold'] = $this->enableRowCountFluctuationThreshold;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['Fields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxDataSizeFluctuationThreshold) {
            $res['MaxDataSizeFluctuationThreshold'] = $this->maxDataSizeFluctuationThreshold;
        }

        if (null !== $this->maxRowCountFluctuationThreshold) {
            $res['MaxRowCountFluctuationThreshold'] = $this->maxRowCountFluctuationThreshold;
        }

        if (null !== $this->maxcomputeProjectName) {
            $res['MaxcomputeProjectName'] = $this->maxcomputeProjectName;
        }

        if (null !== $this->maxcomputeSchema) {
            $res['MaxcomputeSchema'] = $this->maxcomputeSchema;
        }

        if (null !== $this->maxcomputeTableName) {
            $res['MaxcomputeTableName'] = $this->maxcomputeTableName;
        }

        if (null !== $this->minDataSizeFluctuationThreshold) {
            $res['MinDataSizeFluctuationThreshold'] = $this->minDataSizeFluctuationThreshold;
        }

        if (null !== $this->minRowCountFluctuationThreshold) {
            $res['MinRowCountFluctuationThreshold'] = $this->minRowCountFluctuationThreshold;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->recallType) {
            $res['RecallType'] = $this->recallType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableDataSizeFluctuationThreshold'])) {
            $model->enableDataSizeFluctuationThreshold = $map['EnableDataSizeFluctuationThreshold'];
        }

        if (isset($map['EnableRowCountFluctuationThreshold'])) {
            $model->enableRowCountFluctuationThreshold = $map['EnableRowCountFluctuationThreshold'];
        }

        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['Fields'] as $item1) {
                    $model->fields[$n1] = fields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxDataSizeFluctuationThreshold'])) {
            $model->maxDataSizeFluctuationThreshold = $map['MaxDataSizeFluctuationThreshold'];
        }

        if (isset($map['MaxRowCountFluctuationThreshold'])) {
            $model->maxRowCountFluctuationThreshold = $map['MaxRowCountFluctuationThreshold'];
        }

        if (isset($map['MaxcomputeProjectName'])) {
            $model->maxcomputeProjectName = $map['MaxcomputeProjectName'];
        }

        if (isset($map['MaxcomputeSchema'])) {
            $model->maxcomputeSchema = $map['MaxcomputeSchema'];
        }

        if (isset($map['MaxcomputeTableName'])) {
            $model->maxcomputeTableName = $map['MaxcomputeTableName'];
        }

        if (isset($map['MinDataSizeFluctuationThreshold'])) {
            $model->minDataSizeFluctuationThreshold = $map['MinDataSizeFluctuationThreshold'];
        }

        if (isset($map['MinRowCountFluctuationThreshold'])) {
            $model->minRowCountFluctuationThreshold = $map['MinRowCountFluctuationThreshold'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RecallType'])) {
            $model->recallType = $map['RecallType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
