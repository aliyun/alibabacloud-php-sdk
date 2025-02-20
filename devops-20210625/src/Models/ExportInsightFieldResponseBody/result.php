<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ExportInsightFieldResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $fieldId;
    /**
     * @var string
     */
    public $fieldName;
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
     * @var string
     */
    public $isSystem;
    /**
     * @var string
     */
    public $optionValue;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var int
     */
    public $position;
    /**
     * @var string
     */
    public $scope;
    /**
     * @var string
     */
    public $source;
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
    protected $_name = [
        'fieldId'        => 'fieldId',
        'fieldName'      => 'fieldName',
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'id'             => 'id',
        'identifier'     => 'identifier',
        'isDeleted'      => 'isDeleted',
        'isSystem'       => 'isSystem',
        'optionValue'    => 'optionValue',
        'organizationId' => 'organizationId',
        'position'       => 'position',
        'scope'          => 'scope',
        'source'         => 'source',
        'targetId'       => 'targetId',
        'targetType'     => 'targetType',
        'type'           => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldId) {
            $res['fieldId'] = $this->fieldId;
        }

        if (null !== $this->fieldName) {
            $res['fieldName'] = $this->fieldName;
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

        if (null !== $this->isSystem) {
            $res['isSystem'] = $this->isSystem;
        }

        if (null !== $this->optionValue) {
            $res['optionValue'] = $this->optionValue;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->position) {
            $res['position'] = $this->position;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldId'])) {
            $model->fieldId = $map['fieldId'];
        }

        if (isset($map['fieldName'])) {
            $model->fieldName = $map['fieldName'];
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

        if (isset($map['isSystem'])) {
            $model->isSystem = $map['isSystem'];
        }

        if (isset($map['optionValue'])) {
            $model->optionValue = $map['optionValue'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['position'])) {
            $model->position = $map['position'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
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

        return $model;
    }
}
