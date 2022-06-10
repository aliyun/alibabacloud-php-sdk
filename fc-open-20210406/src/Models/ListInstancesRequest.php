<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description 实例ID
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description 限定此次返回资源的数量，取值范围[0,1000]。
     *
     * 返回结果可以小于指定的数量，但不能多于指定的数量。
     * @var int
     */
    public $limit;

    /**
     * @description 服务的版本或别名。默认是LATEST。
     *
     * 此处的qualifier同InvokeFunction的qualifier含义一致，即调用ListInstances时指定qualifier=test查询出来的实例，就是调用InvokeFunction时qualifier=test链路上的实例。
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'instanceIds' => 'instanceIds',
        'limit'       => 'limit',
        'qualifier'   => 'qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['instanceIds'] = $this->instanceIds;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
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
        if (isset($map['instanceIds'])) {
            if (!empty($map['instanceIds'])) {
                $model->instanceIds = $map['instanceIds'];
            }
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
