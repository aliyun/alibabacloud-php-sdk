<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateMaliciousFileWhitelistConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $count;

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
     * @example 1671607025000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1671607025000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1
     *
     * @var string
     */
    public $id;

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
