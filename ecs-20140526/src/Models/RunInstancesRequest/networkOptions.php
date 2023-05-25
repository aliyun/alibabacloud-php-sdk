<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class networkOptions extends Model
{
    /**
     * @description 实例是否开启Jumbo frame特性。参数取值范围：
     *
     * >只有八代以上部分实例规格支持开启Jumbo frame特性，更多信息，请参见[ECS实例MTU](~~200512~~)。
     * @example false
     *
     * @var bool
     */
    public $enableJumboFrame;
    protected $_name = [
        'enableJumboFrame' => 'EnableJumboFrame',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableJumboFrame) {
            $res['EnableJumboFrame'] = $this->enableJumboFrame;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableJumboFrame'])) {
            $model->enableJumboFrame = $map['EnableJumboFrame'];
        }

        return $model;
    }
}
