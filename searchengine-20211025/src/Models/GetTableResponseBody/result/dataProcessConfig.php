<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result\dataProcessConfig\params;
use AlibabaCloud\Tea\Model;

class dataProcessConfig extends Model
{
    /**
     * @example source_image_vector
     *
     * @var string
     */
    public $dstField;

    /**
     * @example vectorize
     *
     * @var string
     */
    public $operator;

    /**
     * @var params
     */
    public $params;

    /**
     * @example source_image
     *
     * @var string
     */
    public $srcField;
    protected $_name = [
        'dstField' => 'dstField',
        'operator' => 'operator',
        'params'   => 'params',
        'srcField' => 'srcField',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstField) {
            $res['dstField'] = $this->dstField;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->params) {
            $res['params'] = null !== $this->params ? $this->params->toMap() : null;
        }
        if (null !== $this->srcField) {
            $res['srcField'] = $this->srcField;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataProcessConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dstField'])) {
            $model->dstField = $map['dstField'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['params'])) {
            $model->params = params::fromMap($map['params']);
        }
        if (isset($map['srcField'])) {
            $model->srcField = $map['srcField'];
        }

        return $model;
    }
}
