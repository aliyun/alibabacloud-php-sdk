<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFcParameters;

use AlibabaCloud\Tea\Model;

class dataFormat extends Model
{
    /**
     * @description The method that you want to use to transform events. Valid values:
     *
     *   ORIGINAL: complete event
     *   JSONPATH: partial event
     *   CONSTANT: constant
     *   TEMPLATE: template
     *
     * @example JSONPATH
     *
     * @var string
     */
    public $form;

    /**
     * @description The template based on which you want events to be transformed.
     *
     * @example $.data.key
     *
     * @var string
     */
    public $template;

    /**
     * @description The value before event transformation.
     *
     * @example {
     * "key": "value"
     * }
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
     * @return dataFormat
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
