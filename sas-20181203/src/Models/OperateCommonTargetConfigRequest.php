<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateCommonTargetConfigRequest extends Model
{
    /**
     * @example repoName
     *
     * @var string
     */
    public $fieldName;

    /**
     * @example cafcmc-dev
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @example 182.92.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example [
     * "targetType": "uuid",
     * "target": "f329a044-6a2f-49a0-9d33-352f6c1d****",
     * ]
     * @var string
     */
    public $targetOperations;

    /**
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @example alidetect
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fieldName'        => 'FieldName',
        'fieldValue'       => 'FieldValue',
        'sourceIp'         => 'SourceIp',
        'targetOperations' => 'TargetOperations',
        'targetType'       => 'TargetType',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->targetOperations) {
            $res['TargetOperations'] = $this->targetOperations;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateCommonTargetConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TargetOperations'])) {
            $model->targetOperations = $map['TargetOperations'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
