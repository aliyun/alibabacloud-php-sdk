<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightCustomValueResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 66.6
     *
     * @var float
     */
    public $doubleValue;

    /**
     * @example 34dde3dfa5e3750151a7c4xxxx
     *
     * @var string
     */
    public $fieldId;

    /**
     * @example 1704950971000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1714669494000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 320737507
     *
     * @var int
     */
    public $id;

    /**
     * @example 442d4a6a9980e841dc192a411080xxxx
     *
     * @var string
     */
    public $identifier;

    /**
     * @example N
     *
     * @var string
     */
    public $isDeleted;

    /**
     * @example 66
     *
     * @var int
     */
    public $longValue;

    /**
     * @example 61db9af2148974246bexxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 1ee00fcb1a18c2dc83dafdxxxx
     *
     * @var string
     */
    public $targetId;

    /**
     * @example Workitem
     *
     * @var string
     */
    public $targetType;

    /**
     * @example string
     *
     * @var string
     */
    public $type;

    /**
     * @example 66
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'doubleValue'    => 'doubleValue',
        'fieldId'        => 'fieldId',
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'id'             => 'id',
        'identifier'     => 'identifier',
        'isDeleted'      => 'isDeleted',
        'longValue'      => 'longValue',
        'organizationId' => 'organizationId',
        'targetId'       => 'targetId',
        'targetType'     => 'targetType',
        'type'           => 'type',
        'value'          => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->doubleValue) {
            $res['doubleValue'] = $this->doubleValue;
        }
        if (null !== $this->fieldId) {
            $res['fieldId'] = $this->fieldId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->isDeleted) {
            $res['isDeleted'] = $this->isDeleted;
        }
        if (null !== $this->longValue) {
            $res['longValue'] = $this->longValue;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->targetId) {
            $res['targetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['doubleValue'])) {
            $model->doubleValue = $map['doubleValue'];
        }
        if (isset($map['fieldId'])) {
            $model->fieldId = $map['fieldId'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['isDeleted'])) {
            $model->isDeleted = $map['isDeleted'];
        }
        if (isset($map['longValue'])) {
            $model->longValue = $map['longValue'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['targetId'])) {
            $model->targetId = $map['targetId'];
        }
        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
