<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDashVectorParameters;

use AlibabaCloud\Tea\Model;

class primaryKeyId extends Model
{
    /**
     * @description The method that you want to use to transform events. Valid values:
     *
     *   JSONPATH
     *   TEMPLATE
     *
     * @example JSONPATH
     *
     * @var string
     */
    public $form;

    /**
     * @description The template that you want to use to specify primary key IDs. This parameter is required only if you set Form to TEMPLATE.
     *
     * @example ${ID}
     *
     * @var string
     */
    public $template;

    /**
     * @description If you set Form to JSONPATH, specify a JSONPath rule. If you set Form to TEMPLATE, specify variables for the template.
     *
     * >  The value of this parameter cannot exceed 10,240 characters in length.
     *
     * @example $.data.requestId
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
     * @return primaryKeyId
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
