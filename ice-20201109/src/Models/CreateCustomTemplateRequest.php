<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateCustomTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $subtype;
    /**
     * @var string
     */
    public $templateConfig;
    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'name'           => 'Name',
        'subtype'        => 'Subtype',
        'templateConfig' => 'TemplateConfig',
        'type'           => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->subtype) {
            $res['Subtype'] = $this->subtype;
        }

        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Subtype'])) {
            $model->subtype = $map['Subtype'];
        }

        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
