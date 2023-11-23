<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDataHubParameters;

use AlibabaCloud\Tea\Model;

class topicSchema extends Model
{
    /**
     * @description The format into which you want to transform events.
     *
     * @example TEMPLATE
     *
     * @var string
     */
    public $form;

    /**
     * @description The template based on which you want to transform events.
     *
     * @example {"k1":"${k1}","k2":"${k2}"}
     *
     * @var string
     */
    public $template;

    /**
     * @description The TUBLE topic.
     *
     * @example {"k1":"value1","k2":"value2"}
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
     * @return topicSchema
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
