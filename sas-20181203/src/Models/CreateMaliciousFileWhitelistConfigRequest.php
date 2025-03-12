<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateMaliciousFileWhitelistConfigRequest extends Model
{
    /**
     * @description The name of the alert.
     *
     *   Set the value to ALL, which indicates all alert types.
     *
     * @example ALL
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The field that you want to use in the whitelist rule.
     *
     * @example fileMd5
     *
     * @var string
     */
    public $field;

    /**
     * @description The value of the field that you want to use in the whitelist rule.
     *
     * @example b2cf9747ee49d8d9b105cf16e078cc16
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The logical operator that you want to use in the whitelist rule.
     *
     *   Set the value to strEqual, which indicates the equality operator (=).
     *
     * @example strEqual
     *
     * @var string
     */
    public $operator;

    /**
     * @description The feature to which this operation belongs.
     *
     *   Set the value to agentless, which indicates the agentless detection feature.
     *
     * @example agentless
     *
     * @var string
     */
    public $source;

    /**
     * @description The type of the assets on which you want the whitelist rule to take effect. Valid values:
     *
     *   ALL: all assets
     *   SELECTION_KEY: selected assets
     *
     * @example ALL
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The assets on which you want the whitelist rule to take effect. Valid values:
     *
     *   ALL: all assets
     *   Others: selected assets
     *
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
