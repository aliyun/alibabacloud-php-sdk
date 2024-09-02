<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSummariesRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The HTML tag that is used to highlight terms in red.
     *
     * @example "em"
     *
     * @var string
     */
    public $element;

    /**
     * @description The connector that is used to connect segments.
     *
     * @example "..."
     *
     * @var string
     */
    public $ellipsis;

    /**
     * @description The field.
     *
     * @example "title"
     *
     * @var string
     */
    public $field;

    /**
     * @description The length of a segment.
     *
     * @example 50
     *
     * @var int
     */
    public $len;

    /**
     * @description The number of segments.
     *
     * @example 1
     *
     * @var int
     */
    public $snippet;
    protected $_name = [
        'element'  => 'element',
        'ellipsis' => 'ellipsis',
        'field'    => 'field',
        'len'      => 'len',
        'snippet'  => 'snippet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->element) {
            $res['element'] = $this->element;
        }
        if (null !== $this->ellipsis) {
            $res['ellipsis'] = $this->ellipsis;
        }
        if (null !== $this->field) {
            $res['field'] = $this->field;
        }
        if (null !== $this->len) {
            $res['len'] = $this->len;
        }
        if (null !== $this->snippet) {
            $res['snippet'] = $this->snippet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['element'])) {
            $model->element = $map['element'];
        }
        if (isset($map['ellipsis'])) {
            $model->ellipsis = $map['ellipsis'];
        }
        if (isset($map['field'])) {
            $model->field = $map['field'];
        }
        if (isset($map['len'])) {
            $model->len = $map['len'];
        }
        if (isset($map['snippet'])) {
            $model->snippet = $map['snippet'];
        }

        return $model;
    }
}
