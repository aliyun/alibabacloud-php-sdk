<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\ListTracesDatasRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The name of the filter parameter, case-insensitive. Supported parameters: \\"serviceid\\", \\"servicename\\", \\"input\\", \\"output\\", \\"status\\", \\"tracetype\\", and \\"tracename\\".
     *
     * The otel span attributes corresponding to the parameters:
     *
     * serviceid: resources.service.id
     *
     * servicename: resources.service.name
     *
     * input: attributes.input.value
     *
     * output: attributes.output.value
     *
     * status: statusCode
     *
     * tracetype: the attributes.gen_ai.span.kind of span whose parentSpanId is 0
     *
     * tracename: the spanName of span whose parentSpanId is 0
     *
     * Valid values:
     *
     *   Status
     *   SpanName
     *   Input
     *   TraceType
     *   SpanType
     *   ServiceName
     *   Output
     *   TraceName
     *   ServiceId
     *
     * @example output
     *
     * @var string
     */
    public $key;

    /**
     * @description The parameter operator. Case-insensitive. Supported operators: \\"=\\", \\"contains\\", and \\"startswith\\".
     *
     * Valid values:
     *
     *   contains
     *   \\=
     *   startsWith
     *
     * @example contains
     *
     * @var string
     */
    public $operator;

    /**
     * @description The value of the filter parameter. For the contains operation, it is case-sensitive. For other operations, it is case-insensitive.
     *
     * @example cretain filter string
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'operator' => 'Operator',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
