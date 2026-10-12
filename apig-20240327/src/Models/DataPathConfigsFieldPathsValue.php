<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class DataPathConfigsFieldPathsValue extends Model
{
    /**
     * @var string
     */
    public $fieldKey;

    /**
     * @var string
     */
    public $jsonPath;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $io;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var bool
     */
    public $recordEnabled;

    /**
     * @var bool
     */
    public $toggleAllowed;

    /**
     * @var bool
     */
    public $jsonPathRewriteAllowed;

    /**
     * @var bool
     */
    public $fromTemplate;
    protected $_name = [
        'fieldKey' => 'fieldKey',
        'jsonPath' => 'jsonPath',
        'rule' => 'rule',
        'name' => 'name',
        'description' => 'description',
        'source' => 'source',
        'category' => 'category',
        'io' => 'io',
        'sensitive' => 'sensitive',
        'recordEnabled' => 'recordEnabled',
        'toggleAllowed' => 'toggleAllowed',
        'jsonPathRewriteAllowed' => 'jsonPathRewriteAllowed',
        'fromTemplate' => 'fromTemplate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldKey) {
            $res['fieldKey'] = $this->fieldKey;
        }

        if (null !== $this->jsonPath) {
            $res['jsonPath'] = $this->jsonPath;
        }

        if (null !== $this->rule) {
            $res['rule'] = $this->rule;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->io) {
            $res['io'] = $this->io;
        }

        if (null !== $this->sensitive) {
            $res['sensitive'] = $this->sensitive;
        }

        if (null !== $this->recordEnabled) {
            $res['recordEnabled'] = $this->recordEnabled;
        }

        if (null !== $this->toggleAllowed) {
            $res['toggleAllowed'] = $this->toggleAllowed;
        }

        if (null !== $this->jsonPathRewriteAllowed) {
            $res['jsonPathRewriteAllowed'] = $this->jsonPathRewriteAllowed;
        }

        if (null !== $this->fromTemplate) {
            $res['fromTemplate'] = $this->fromTemplate;
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
        if (isset($map['fieldKey'])) {
            $model->fieldKey = $map['fieldKey'];
        }

        if (isset($map['jsonPath'])) {
            $model->jsonPath = $map['jsonPath'];
        }

        if (isset($map['rule'])) {
            $model->rule = $map['rule'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['io'])) {
            $model->io = $map['io'];
        }

        if (isset($map['sensitive'])) {
            $model->sensitive = $map['sensitive'];
        }

        if (isset($map['recordEnabled'])) {
            $model->recordEnabled = $map['recordEnabled'];
        }

        if (isset($map['toggleAllowed'])) {
            $model->toggleAllowed = $map['toggleAllowed'];
        }

        if (isset($map['jsonPathRewriteAllowed'])) {
            $model->jsonPathRewriteAllowed = $map['jsonPathRewriteAllowed'];
        }

        if (isset($map['fromTemplate'])) {
            $model->fromTemplate = $map['fromTemplate'];
        }

        return $model;
    }
}
