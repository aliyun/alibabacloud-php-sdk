<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponseBody\result;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponseBody\result\componentCategory\list_;
use AlibabaCloud\Tea\Model;

class componentCategory extends Model
{
    /**
     * @description 类别下的组件列表
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description 组件类别
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'list' => 'List',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
