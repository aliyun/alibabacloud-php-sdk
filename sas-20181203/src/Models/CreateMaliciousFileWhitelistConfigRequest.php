<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateMaliciousFileWhitelistConfigRequest extends Model
{
    /**
     * @example ALL
     *
     * @var string
     */
    public $eventName;

    /**
     * @example fileMd5
     *
     * @var string
     */
    public $field;

    /**
     * @example b2cf9747ee49d8d9b105cf16e078cc16
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @example strEqual
     *
     * @var string
     */
    public $operator;

    /**
     * @example agentless
     *
     * @var string
     */
    public $source;

    /**
     * @example ALL
     *
     * @var string
     */
    public $targetType;

    /**
     * @example ALL
     *
     * @var string
     */
    public $targetValue;
    protected $_name = [
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
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return CreateMaliciousFileWhitelistConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
