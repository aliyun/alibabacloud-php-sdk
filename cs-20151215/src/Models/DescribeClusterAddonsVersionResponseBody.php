<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterAddonsVersionResponseBody extends Model
{
    /**
     * @description 组件名称。
     *
     * @var mixed[][]
     */
    public $addonsName;
    protected $_name = [
        'addonsName' => 'AddonsName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonsName) {
            $res['AddonsName'] = $this->addonsName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAddonsVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddonsName'])) {
            $model->addonsName = $map['AddonsName'];
        }

        return $model;
    }
}
