<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody;

use AlibabaCloud\Tea\Model;

class standardComponents extends Model
{
    /**
     * @description 组件名称。
     *
     * @var mixed[][]
     */
    public $componentName;
    protected $_name = [
        'componentName' => 'ComponentName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standardComponents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        return $model;
    }
}
