<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters;

use AlibabaCloud\Dara\Model;

class queueName extends Model
{
    /**
     * @var string
     */
    public $form;
    /**
     * @var string
     */
    public $template;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
