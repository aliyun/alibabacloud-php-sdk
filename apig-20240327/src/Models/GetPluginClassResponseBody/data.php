<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginClassResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $document;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $wasmLanguage;
    protected $_name = [
        'alias' => 'alias',
        'description' => 'description',
        'document' => 'document',
        'name' => 'name',
        'publishStatus' => 'publishStatus',
        'type' => 'type',
        'wasmLanguage' => 'wasmLanguage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->publishStatus) {
            $res['publishStatus'] = $this->publishStatus;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->wasmLanguage) {
            $res['wasmLanguage'] = $this->wasmLanguage;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['document'])) {
            $model->document = $map['document'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['publishStatus'])) {
            $model->publishStatus = $map['publishStatus'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['wasmLanguage'])) {
            $model->wasmLanguage = $map['wasmLanguage'];
        }

        return $model;
    }
}
