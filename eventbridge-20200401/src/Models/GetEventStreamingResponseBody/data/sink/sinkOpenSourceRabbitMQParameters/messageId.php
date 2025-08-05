<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkOpenSourceRabbitMQParameters;

use AlibabaCloud\Tea\Model;

class messageId extends Model
{
    /**
     * @example CONSTANT
     *
     * @var string
     */
    public $form;

    /**
     * @var string
     */
    public $template;

    /**
     * @example 12345
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'form' => 'Form',
        'template' => 'Template',
        'value' => 'Value',
    ];

    public function validate() {}

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
     * @return messageId
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
