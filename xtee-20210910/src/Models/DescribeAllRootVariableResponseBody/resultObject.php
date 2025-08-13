<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllRootVariableResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAllRootVariableResponseBody\resultObject\outputThreshold;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayType;

    /**
     * @var bool
     */
    public $favoriteFlag;

    /**
     * @var int
     */
    public $fieldRank;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $inputFieldType;

    /**
     * @var string
     */
    public $inputs;

    /**
     * @var string
     */
    public $name;

    /**
     * @var outputThreshold
     */
    public $outputThreshold;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'code' => 'code',
        'description' => 'description',
        'displayType' => 'displayType',
        'favoriteFlag' => 'favoriteFlag',
        'fieldRank' => 'fieldRank',
        'fieldType' => 'fieldType',
        'id' => 'id',
        'inputFieldType' => 'inputFieldType',
        'inputs' => 'inputs',
        'name' => 'name',
        'outputThreshold' => 'outputThreshold',
        'sourceType' => 'sourceType',
        'title' => 'title',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->outputThreshold) {
            $this->outputThreshold->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayType) {
            $res['displayType'] = $this->displayType;
        }

        if (null !== $this->favoriteFlag) {
            $res['favoriteFlag'] = $this->favoriteFlag;
        }

        if (null !== $this->fieldRank) {
            $res['fieldRank'] = $this->fieldRank;
        }

        if (null !== $this->fieldType) {
            $res['fieldType'] = $this->fieldType;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->inputFieldType) {
            $res['inputFieldType'] = $this->inputFieldType;
        }

        if (null !== $this->inputs) {
            $res['inputs'] = $this->inputs;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->outputThreshold) {
            $res['outputThreshold'] = null !== $this->outputThreshold ? $this->outputThreshold->toArray($noStream) : $this->outputThreshold;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayType'])) {
            $model->displayType = $map['displayType'];
        }

        if (isset($map['favoriteFlag'])) {
            $model->favoriteFlag = $map['favoriteFlag'];
        }

        if (isset($map['fieldRank'])) {
            $model->fieldRank = $map['fieldRank'];
        }

        if (isset($map['fieldType'])) {
            $model->fieldType = $map['fieldType'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['inputFieldType'])) {
            $model->inputFieldType = $map['inputFieldType'];
        }

        if (isset($map['inputs'])) {
            $model->inputs = $map['inputs'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['outputThreshold'])) {
            $model->outputThreshold = outputThreshold::fromMap($map['outputThreshold']);
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
