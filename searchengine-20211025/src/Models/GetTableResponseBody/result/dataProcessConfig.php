<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetTableResponseBody\result\dataProcessConfig\params;

class dataProcessConfig extends Model
{
    /**
     * @var string
     */
    public $dstField;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var params
     */
    public $params;

    /**
     * @var string
     */
    public $srcField;
    protected $_name = [
        'dstField' => 'dstField',
        'operator' => 'operator',
        'params' => 'params',
        'srcField' => 'srcField',
    ];

    public function validate()
    {
        if (null !== $this->params) {
            $this->params->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstField) {
            $res['dstField'] = $this->dstField;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->params) {
            $res['params'] = null !== $this->params ? $this->params->toArray($noStream) : $this->params;
        }

        if (null !== $this->srcField) {
            $res['srcField'] = $this->srcField;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
