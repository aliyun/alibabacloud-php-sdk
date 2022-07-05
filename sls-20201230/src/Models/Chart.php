<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\Chart\display;
use AlibabaCloud\SDK\Sls\V20201230\Models\Chart\search;
use AlibabaCloud\Tea\Model;

class Chart extends Model
{
    /**
     * @description action
     *
     * @var string[]
     */
    public $action;

    /**
     * @description 图表的显示配置
     *
     * @var display
     */
    public $display;

    /**
     * @description 查询配置
     *
     * @var search
     */
    public $search;

    /**
     * @description 图表标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 图标类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'action'  => 'action',
        'display' => 'display',
        'search'  => 'search',
        'title'   => 'title',
        'type'    => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->display) {
            $res['display'] = null !== $this->display ? $this->display->toMap() : null;
        }
        if (null !== $this->search) {
            $res['search'] = null !== $this->search ? $this->search->toMap() : null;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Chart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['display'])) {
            $model->display = display::fromMap($map['display']);
        }
        if (isset($map['search'])) {
            $model->search = search::fromMap($map['search']);
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
