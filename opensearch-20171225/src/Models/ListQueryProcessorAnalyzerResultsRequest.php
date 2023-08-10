<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListQueryProcessorAnalyzerResultsRequest extends Model
{
    /**
     * @description The text to be tested.
     *
     * @example "abcde"
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'text' => 'text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueryProcessorAnalyzerResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
