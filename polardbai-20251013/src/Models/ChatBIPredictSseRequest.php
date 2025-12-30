<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPredictSseRequest\parameters;

class ChatBIPredictSseRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var bool
     */
    public $generateChart;

    /**
     * @var bool
     */
    public $generateSummary;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @var string
     */
    public $patternIndexTableName;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $schemaIndexTableName;

    /**
     * @var bool
     */
    public $selectData;
    protected $_name = [
        'dbName' => 'DbName',
        'generateChart' => 'GenerateChart',
        'generateSummary' => 'GenerateSummary',
        'instanceName' => 'InstanceName',
        'parameters' => 'Parameters',
        'patternIndexTableName' => 'PatternIndexTableName',
        'question' => 'Question',
        'schemaIndexTableName' => 'SchemaIndexTableName',
        'selectData' => 'SelectData',
    ];

    public function validate()
    {
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->generateChart) {
            $res['GenerateChart'] = $this->generateChart;
        }

        if (null !== $this->generateSummary) {
            $res['GenerateSummary'] = $this->generateSummary;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->patternIndexTableName) {
            $res['PatternIndexTableName'] = $this->patternIndexTableName;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->schemaIndexTableName) {
            $res['SchemaIndexTableName'] = $this->schemaIndexTableName;
        }

        if (null !== $this->selectData) {
            $res['SelectData'] = $this->selectData;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['GenerateChart'])) {
            $model->generateChart = $map['GenerateChart'];
        }

        if (isset($map['GenerateSummary'])) {
            $model->generateSummary = $map['GenerateSummary'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = parameters::fromMap($map['Parameters']);
        }

        if (isset($map['PatternIndexTableName'])) {
            $model->patternIndexTableName = $map['PatternIndexTableName'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['SchemaIndexTableName'])) {
            $model->schemaIndexTableName = $map['SchemaIndexTableName'];
        }

        if (isset($map['SelectData'])) {
            $model->selectData = $map['SelectData'];
        }

        return $model;
    }
}
