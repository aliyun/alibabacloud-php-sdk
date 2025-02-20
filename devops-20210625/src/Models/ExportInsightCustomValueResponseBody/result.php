<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightCustomValueResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var float
     */
    public $doubleValue;
    /**
     * @var string
     */
    public $fieldId;
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var int
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var string
     */
    public $isDeleted;
    /**
     * @var int
     */
    public $longValue;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var string
     */
    public $targetId;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string
     */
    public $type;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
