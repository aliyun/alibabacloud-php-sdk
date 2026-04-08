<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class AiStatisticsPathField extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fieldKey;

    /**
     * @var string
     */
    public $io;

    /**
     * @var string
     */
    public $jsonPath;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $recordEnabled;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'category' => 'category',
        'description' => 'description',
        'fieldKey' => 'fieldKey',
        'io' => 'io',
        'jsonPath' => 'jsonPath',
        'name' => 'name',
        'recordEnabled' => 'recordEnabled',
        'rule' => 'rule',
        'sensitive' => 'sensitive',
        'source' => 'source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->fieldKey) {
            $res['fieldKey'] = $this->fieldKey;
        }

        if (null !== $this->io) {
            $res['io'] = $this->io;
        }

        if (null !== $this->jsonPath) {
            $res['jsonPath'] = $this->jsonPath;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->recordEnabled) {
            $res['recordEnabled'] = $this->recordEnabled;
        }

        if (null !== $this->rule) {
            $res['rule'] = $this->rule;
        }

        if (null !== $this->sensitive) {
            $res['sensitive'] = $this->sensitive;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['fieldKey'])) {
            $model->fieldKey = $map['fieldKey'];
        }

        if (isset($map['io'])) {
            $model->io = $map['io'];
        }

        if (isset($map['jsonPath'])) {
            $model->jsonPath = $map['jsonPath'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['recordEnabled'])) {
            $model->recordEnabled = $map['recordEnabled'];
        }

        if (isset($map['rule'])) {
            $model->rule = $map['rule'];
        }

        if (isset($map['sensitive'])) {
            $model->sensitive = $map['sensitive'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
