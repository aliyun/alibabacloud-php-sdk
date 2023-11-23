<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRabbitMQParameters;

use AlibabaCloud\Tea\Model;

class targetType extends Model
{
    /**
     * @description The format into which you want to transform events. Default value: CONSTANT.
     *
     * @example CONSTANT
     *
     * @var string
     */
    public $form;

    /**
     * @description The template based on which you want to transform events.
     *
     * @example The value of ${key} is ${value}!
     *
     * @var string
     */
    public $template;

    /**
     * @description The type of the resource to which you want to deliver events. Valid values:
     *
     *   Exchange
     *   Queue
     *
     * @example Exchange/Queue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'form'     => 'Form',
        'template' => 'Template',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->form) {
            $res['Form'] = $this->form;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Form'])) {
            $model->form = $map['Form'];
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
