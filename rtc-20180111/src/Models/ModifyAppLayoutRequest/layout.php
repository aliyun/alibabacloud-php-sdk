<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppLayoutRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppLayoutRequest\layout\panes;
use AlibabaCloud\Tea\Model;

class layout extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123121231313
     *
     * @var string
     */
    public $layoutId;

    /**
     * @description This parameter is required.
     *
     * @example 测试
     *
     * @var string
     */
    public $name;

    /**
     * @var panes[]
     */
    public $panes;
    protected $_name = [
        'layoutId' => 'LayoutId',
        'name'     => 'Name',
        'panes'    => 'Panes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->panes) {
            $res['Panes'] = [];
            if (null !== $this->panes && \is_array($this->panes)) {
                $n = 0;
                foreach ($this->panes as $item) {
                    $res['Panes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layout
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Panes'])) {
            if (!empty($map['Panes'])) {
                $model->panes = [];
                $n            = 0;
                foreach ($map['Panes'] as $item) {
                    $model->panes[$n++] = null !== $item ? panes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
