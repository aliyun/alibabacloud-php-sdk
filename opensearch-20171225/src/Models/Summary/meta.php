<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\Summary;

use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @var string
     */
    public $element;

    /**
     * @var string
     */
    public $ellipsis;

    /**
     * @var string
     */
    public $field;

    /**
     * @var int
     */
    public $len;

    /**
     * @var string
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
     * @return meta
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
