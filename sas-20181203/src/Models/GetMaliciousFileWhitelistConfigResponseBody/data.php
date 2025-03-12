<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetMaliciousFileWhitelistConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of assets on which the whitelist rule takes effect.
     *
     * >  The value of this parameter is returned only if the value of TargetType is SELECTION_KEY.
     * @example 0
     *
     * @var string
     */
    public $count;

    /**
     * @description The name of the alert.
     *
     *   The value is fixed as ALL, which indicates all alert types.
     *
     * @example ALL
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The field that is used in the whitelist rule.
     *
     * @example fileMd5
     *
     * @var string
     */
    public $field;

    /**
     * @description The value of the field that is used in the whitelist rule.
     *
     * @example b2cf9747ee49d8d9b105cf16e078cc16
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The creation time.
     *
     * @example 1671607025000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The modification time.
     *
     * @example 1674095396000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the whitelist rule.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The logical operator that is used in the whitelist rule.
     *
     *   The value is fixed as strEqual, which indicates the equality operator (=).
     *
     * @example strEqual
     *
     * @var string
     */
    public $operator;

    /**
     * @description The feature to which this operation belongs.
     *
     *   The value is fixed as agentless, which indicates the agentless detection feature.
     *
     * @example agentless
     *
     * @var string
     */
    public $source;

    /**
     * @description The type of the assets on which the whitelist rule takes effect. Valid values:
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
     * @description The assets on which the whitelist rule takes effect. Valid values:
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
        'count'       => 'Count',
        'eventName'   => 'EventName',
        'field'       => 'Field',
        'fieldValue'  => 'FieldValue',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
