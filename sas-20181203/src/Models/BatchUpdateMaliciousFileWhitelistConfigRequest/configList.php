<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\BatchUpdateMaliciousFileWhitelistConfigRequest;

use AlibabaCloud\Dara\Model;

class configList extends Model
{
    /**
     * @var int
     */
    public $configId;
    /**
     * @var string
     */
    public $eventName;
    /**
     * @var string
     */
    public $field;
    /**
     * @var string
     */
    public $fieldValue;
    /**
     * @var string
     */
    public $operator;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string
     */
    public $targetValue;
    protected $_name = [
        'configId'    => 'ConfigId',
        'eventName'   => 'EventName',
        'field'       => 'Field',
        'fieldValue'  => 'FieldValue',
        'operator'    => 'Operator',
        'source'      => 'Source',
        'targetType'  => 'TargetType',
        'targetValue' => 'TargetValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }

        return $model;
    }
}
