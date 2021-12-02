<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description 限定此次返回资源的数量。如果不设定，默认返回20，最大不能超过100。返回结果可能小于指定的数量，但不会多于指定的数量
     *
     * @var int
     */
    public $limit;

    /**
     * @description 用来返回更多结果。第一次查询不需要提供这个参数，后续查询的token从返回结果中获取
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description service版本, 可以是versionId或者aliasName
     *
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'limit'     => 'limit',
        'nextToken' => 'nextToken',
        'qualifier' => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
