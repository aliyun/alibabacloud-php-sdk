<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters;

use AlibabaCloud\Tea\Model;

class instanceId extends Model
{
    /**
     * @description The method that is used to transform the event. Default value: CONSTANT.
     *
     * @example CONSTANT
     *
     * @var string
     */
    public $form;

    /**
     * @description None
     *
     * @var string
     */
    public $template;

    /**
     * @description The ID of the Message Queue for RabbitMQ instance.
     *
     * @example e5c9b727-e06c-4d7e-84d5-f8ce644e00bf
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
     * @return instanceId
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
