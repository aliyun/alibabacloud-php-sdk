<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkDashVectorParameters;

use AlibabaCloud\Tea\Model;

class dashVectorSchemaParameters extends Model
{
    /**
     * @description The method that you want to use to transform events. Valid values:
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
     * @description The schema template. This parameter is required only if you set Form to TEMPLATE. After the event content is transformed, the data must be an array in the JSON format. Each schema corresponds to a JSON object. The properties include only the name, type, and value fields. The value of the type field can be only of the INT, FLOAT, STRING, or BOOL type.
     *
     * @example [
     * {
     * "name": "schema1",
     * "type": "INT",
     * "value": "${value1}"
     * },
     * {
     * "name": "schema2",
     * "type": "FLOAT",
     * "value": "${value2}"
     * }
     * ]
     *
     * @var string
     */
    public $template;

    /**
     * @description *   If you set Form to CONSTANT, specify a constant.
     *   If you set Form to JSONPATH, specify a JSONPath rule.
     *   If you set Form to TEMPLATE, specify variables for the template.
     *
     * >  The value of this parameter cannot exceed 10,240 characters in length.
     *
     * @example {
     * "value1":"v1",
     * "value2":"v2"
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
     * @return dashVectorSchemaParameters
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
