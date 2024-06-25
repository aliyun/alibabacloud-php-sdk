<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class UpdateSqlInstanceParamsRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $combineParam;

    /**
     * @var mixed[]
     */
    public $dynamicParam;

    /**
     * @var mixed[]
     */
    public $kvpair;

    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @var mixed[]
     */
    public $staticParam;
    protected $_name = [
        'combineParam' => 'combineParam',
        'dynamicParam' => 'dynamicParam',
        'kvpair'       => 'kvpair',
        'params'       => 'params',
        'staticParam'  => 'staticParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->combineParam) {
            $res['combineParam'] = $this->combineParam;
        }
        if (null !== $this->dynamicParam) {
            $res['dynamicParam'] = $this->dynamicParam;
        }
        if (null !== $this->kvpair) {
            $res['kvpair'] = $this->kvpair;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->staticParam) {
            $res['staticParam'] = $this->staticParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSqlInstanceParamsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['combineParam'])) {
            $model->combineParam = $map['combineParam'];
        }
        if (isset($map['dynamicParam'])) {
            $model->dynamicParam = $map['dynamicParam'];
        }
        if (isset($map['kvpair'])) {
            $model->kvpair = $map['kvpair'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['staticParam'])) {
            $model->staticParam = $map['staticParam'];
        }

        return $model;
    }
}
