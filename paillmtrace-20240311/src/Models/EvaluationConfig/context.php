<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models\EvaluationConfig;

use AlibabaCloud\Tea\Model;

class context extends Model
{
    /**
     * @var string
     */
    public $jsonPathInSpan;

    /**
     * @var string
     */
    public $jsonPathInSpanValue;

    /**
     * @var string
     */
    public $spanName;
    protected $_name = [
        'jsonPathInSpan' => 'JsonPathInSpan',
        'jsonPathInSpanValue' => 'JsonPathInSpanValue',
        'spanName' => 'SpanName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jsonPathInSpan) {
            $res['JsonPathInSpan'] = $this->jsonPathInSpan;
        }
        if (null !== $this->jsonPathInSpanValue) {
            $res['JsonPathInSpanValue'] = $this->jsonPathInSpanValue;
        }
        if (null !== $this->spanName) {
            $res['SpanName'] = $this->spanName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return context
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JsonPathInSpan'])) {
            $model->jsonPathInSpan = $map['JsonPathInSpan'];
        }
        if (isset($map['JsonPathInSpanValue'])) {
            $model->jsonPathInSpanValue = $map['JsonPathInSpanValue'];
        }
        if (isset($map['SpanName'])) {
            $model->spanName = $map['SpanName'];
        }

        return $model;
    }
}
