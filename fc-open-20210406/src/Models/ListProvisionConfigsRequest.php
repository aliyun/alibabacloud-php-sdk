<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListProvisionConfigsRequest extends Model
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
     * @description 限定返回的资源名称必须属于该qualifier。qualifier只能是aliasName，且必须和serviceName共同使用
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description 限定返回的资源名称必须属于该service
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'limit'       => 'limit',
        'nextToken'   => 'nextToken',
        'qualifier'   => 'qualifier',
        'serviceName' => 'serviceName',
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
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProvisionConfigsRequest
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
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
