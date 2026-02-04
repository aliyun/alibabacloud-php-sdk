<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ValidateNormalizationRuleResponseBody;

use AlibabaCloud\Dara\Model;

class validateResult extends Model
{
    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldValue;

    /**
     * @var string
     */
    public $logFieldName;

    /**
     * @var string
     */
    public $logFieldValue;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $normalizationFieldFrom;

    /**
     * @var string
     */
    public $normalizationFieldName;

    /**
     * @var bool
     */
    public $normalizationFieldRequired;

    /**
     * @var bool
     */
    public $normalizationFieldReserved;

    /**
     * @var string
     */
    public $normalizationFieldType;

    /**
     * @var string
     */
    public $normalizationFieldValidationReason;

    /**
     * @var string
     */
    public $normalizationFieldValidationStatus;

    /**
     * @var int
     */
    public $result;
    protected $_name = [
        'fieldName' => 'FieldName',
        'fieldValue' => 'FieldValue',
        'logFieldName' => 'LogFieldName',
        'logFieldValue' => 'LogFieldValue',
        'message' => 'Message',
        'normalizationFieldFrom' => 'NormalizationFieldFrom',
        'normalizationFieldName' => 'NormalizationFieldName',
        'normalizationFieldRequired' => 'NormalizationFieldRequired',
        'normalizationFieldReserved' => 'NormalizationFieldReserved',
        'normalizationFieldType' => 'NormalizationFieldType',
        'normalizationFieldValidationReason' => 'NormalizationFieldValidationReason',
        'normalizationFieldValidationStatus' => 'NormalizationFieldValidationStatus',
        'result' => 'Result',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }

        if (null !== $this->logFieldName) {
            $res['LogFieldName'] = $this->logFieldName;
        }

        if (null !== $this->logFieldValue) {
            $res['LogFieldValue'] = $this->logFieldValue;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->normalizationFieldFrom) {
            $res['NormalizationFieldFrom'] = $this->normalizationFieldFrom;
        }

        if (null !== $this->normalizationFieldName) {
            $res['NormalizationFieldName'] = $this->normalizationFieldName;
        }

        if (null !== $this->normalizationFieldRequired) {
            $res['NormalizationFieldRequired'] = $this->normalizationFieldRequired;
        }

        if (null !== $this->normalizationFieldReserved) {
            $res['NormalizationFieldReserved'] = $this->normalizationFieldReserved;
        }

        if (null !== $this->normalizationFieldType) {
            $res['NormalizationFieldType'] = $this->normalizationFieldType;
        }

        if (null !== $this->normalizationFieldValidationReason) {
            $res['NormalizationFieldValidationReason'] = $this->normalizationFieldValidationReason;
        }

        if (null !== $this->normalizationFieldValidationStatus) {
            $res['NormalizationFieldValidationStatus'] = $this->normalizationFieldValidationStatus;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }

        if (isset($map['LogFieldName'])) {
            $model->logFieldName = $map['LogFieldName'];
        }

        if (isset($map['LogFieldValue'])) {
            $model->logFieldValue = $map['LogFieldValue'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NormalizationFieldFrom'])) {
            $model->normalizationFieldFrom = $map['NormalizationFieldFrom'];
        }

        if (isset($map['NormalizationFieldName'])) {
            $model->normalizationFieldName = $map['NormalizationFieldName'];
        }

        if (isset($map['NormalizationFieldRequired'])) {
            $model->normalizationFieldRequired = $map['NormalizationFieldRequired'];
        }

        if (isset($map['NormalizationFieldReserved'])) {
            $model->normalizationFieldReserved = $map['NormalizationFieldReserved'];
        }

        if (isset($map['NormalizationFieldType'])) {
            $model->normalizationFieldType = $map['NormalizationFieldType'];
        }

        if (isset($map['NormalizationFieldValidationReason'])) {
            $model->normalizationFieldValidationReason = $map['NormalizationFieldValidationReason'];
        }

        if (isset($map['NormalizationFieldValidationStatus'])) {
            $model->normalizationFieldValidationStatus = $map['NormalizationFieldValidationStatus'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
