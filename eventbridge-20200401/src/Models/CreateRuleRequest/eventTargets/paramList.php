<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateRuleRequest\eventTargets;

use AlibabaCloud\Dara\Model;

class paramList extends Model
{
    /**
     * @var string
     */
    public $form;

    /**
     * @var string
     */
    public $resourceKey;

    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'form' => 'Form',
        'resourceKey' => 'ResourceKey',
        'template' => 'Template',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->form) {
            $res['Form'] = $this->form;
        }

        if (null !== $this->resourceKey) {
            $res['ResourceKey'] = $this->resourceKey;
        }

        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Form'])) {
            $model->form = $map['Form'];
        }

        if (isset($map['ResourceKey'])) {
            $model->resourceKey = $map['ResourceKey'];
        }

        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
