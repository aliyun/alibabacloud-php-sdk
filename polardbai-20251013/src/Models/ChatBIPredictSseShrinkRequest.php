<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBIPredictSseShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $authMessage;

    /**
     * @var string
     */
    public $authType;

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
     * @var string
     */
    public $parametersShrink;

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

    /**
     * @var bool
     */
    public $thinkingMode;
    protected $_name = [
        'authMessage' => 'AuthMessage',
        'authType' => 'AuthType',
        'dbName' => 'DbName',
        'generateChart' => 'GenerateChart',
        'generateSummary' => 'GenerateSummary',
        'instanceName' => 'InstanceName',
        'parametersShrink' => 'Parameters',
        'patternIndexTableName' => 'PatternIndexTableName',
        'question' => 'Question',
        'schemaIndexTableName' => 'SchemaIndexTableName',
        'selectData' => 'SelectData',
        'thinkingMode' => 'ThinkingMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authMessage) {
            $res['AuthMessage'] = $this->authMessage;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

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

        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
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

        if (null !== $this->thinkingMode) {
            $res['ThinkingMode'] = $this->thinkingMode;
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
        if (isset($map['AuthMessage'])) {
            $model->authMessage = $map['AuthMessage'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

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
            $model->parametersShrink = $map['Parameters'];
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

        if (isset($map['ThinkingMode'])) {
            $model->thinkingMode = $map['ThinkingMode'];
        }

        return $model;
    }
}
