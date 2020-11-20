<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterAddonsVersionResponseBody extends Model
{
    /**
     * @description 组件信息详情。
     *
     * @var AddonsVersionValue[]
     */
    public $addonsVersion;
    protected $_name = [
        'addonsVersion' => 'AddonsVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonsVersion) {
            $res['AddonsVersion'] = [];
            if (null !== $this->addonsVersion && \is_array($this->addonsVersion)) {
                foreach ($this->addonsVersion as $key => $val) {
                    $res['AddonsVersion'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
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
        if (isset($map['AddonsVersion'])) {
            $model->addonsVersion = $map['AddonsVersion'];
        }

        return $model;
    }
}
