<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardTemplateRequest\createCommand\attributesConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardTemplateRequest\createCommand\attributesConfig\attributeList\refAttribute;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateStandardTemplateRequest\createCommand\attributesConfig\attributeList\valueConfig;

class attributeList extends Model
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
    public $name;

    /**
     * @var refAttribute
     */
    public $refAttribute;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $type;

    /**
     * @var valueConfig
     */
    public $valueConfig;
    protected $_name = [
        'code' => 'Code',
        'description' => 'Description',
        'name' => 'Name',
        'refAttribute' => 'RefAttribute',
        'required' => 'Required',
        'type' => 'Type',
        'valueConfig' => 'ValueConfig',
    ];

    public function validate()
    {
        if (null !== $this->refAttribute) {
            $this->refAttribute->validate();
        }
        if (null !== $this->valueConfig) {
            $this->valueConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->refAttribute) {
            $res['RefAttribute'] = null !== $this->refAttribute ? $this->refAttribute->toArray($noStream) : $this->refAttribute;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->valueConfig) {
            $res['ValueConfig'] = null !== $this->valueConfig ? $this->valueConfig->toArray($noStream) : $this->valueConfig;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RefAttribute'])) {
            $model->refAttribute = refAttribute::fromMap($map['RefAttribute']);
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ValueConfig'])) {
            $model->valueConfig = valueConfig::fromMap($map['ValueConfig']);
        }

        return $model;
    }
}
