<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkPrometheusParameters;

use AlibabaCloud\Tea\Model;

class headerParameters extends Model
{
    /**
     * @description The method that you want to use to transform events.
     *
     **Valid values:**
     *
     *   JSONPATH
     *   CONSTANT
     *   TEMPLATE
     *
     * @example TEMPLATE
     *
     * @var string
     */
    public $form;

    /**
     * @description The template that you want to use for HTTP request headers. This parameter is required only if you set Form to TEMPLATE. After the event content is transformed, the data must be in JSON format.
     *
     * @example {
     * "user_name":"${name}"
     * }
     *
     * @var string
     */
    public $template;

    /**
     * @description *   If you set Form to CONSTANT, specify a constant.
     *   If you set Form to JSONPATH, specify a JSONPath rule.
     *   If you set Form to TEMPLATE, specify variables for the template.
     *
     * Note: The value of this parameter cannot exceed 10,240 characters in length.
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
     * @return headerParameters
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
