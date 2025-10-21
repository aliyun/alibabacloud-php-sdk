<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyDefaultOptionsResponseBody;

use AlibabaCloud\Dara\Model;

class sensitiveDataTypeList extends Model
{
    /**
     * @var int
     */
    public $actionType;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $example;

    /**
     * @var string
     */
    public $exampleProcessed;

    /**
     * @var int
     */
    public $isEnabled;

    /**
     * @var string
     */
    public $matchAndReplace;

    /**
     * @var int
     */
    public $sensitiveConfigId;

    /**
     * @var string
     */
    public $sensitiveName;
    protected $_name = [
        'actionType' => 'ActionType',
        'dataType' => 'DataType',
        'example' => 'Example',
        'exampleProcessed' => 'ExampleProcessed',
        'isEnabled' => 'IsEnabled',
        'matchAndReplace' => 'MatchAndReplace',
        'sensitiveConfigId' => 'SensitiveConfigId',
        'sensitiveName' => 'SensitiveName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->example) {
            $res['Example'] = $this->example;
        }

        if (null !== $this->exampleProcessed) {
            $res['ExampleProcessed'] = $this->exampleProcessed;
        }

        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }

        if (null !== $this->matchAndReplace) {
            $res['MatchAndReplace'] = $this->matchAndReplace;
        }

        if (null !== $this->sensitiveConfigId) {
            $res['SensitiveConfigId'] = $this->sensitiveConfigId;
        }

        if (null !== $this->sensitiveName) {
            $res['SensitiveName'] = $this->sensitiveName;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Example'])) {
            $model->example = $map['Example'];
        }

        if (isset($map['ExampleProcessed'])) {
            $model->exampleProcessed = $map['ExampleProcessed'];
        }

        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }

        if (isset($map['MatchAndReplace'])) {
            $model->matchAndReplace = $map['MatchAndReplace'];
        }

        if (isset($map['SensitiveConfigId'])) {
            $model->sensitiveConfigId = $map['SensitiveConfigId'];
        }

        if (isset($map['SensitiveName'])) {
            $model->sensitiveName = $map['SensitiveName'];
        }

        return $model;
    }
}
