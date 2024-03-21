<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsResponseBody\module;
use AlibabaCloud\Tea\Model;

class QueryActivityItemsResponseBody extends Model
{
    /**
     * @var module
     */
    public $module;
    protected $_name = [
        'module' => 'Module',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->module) {
            $res['Module'] = null !== $this->module ? $this->module->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryActivityItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Module'])) {
            $model->module = module::fromMap($map['Module']);
        }

        return $model;
    }
}
