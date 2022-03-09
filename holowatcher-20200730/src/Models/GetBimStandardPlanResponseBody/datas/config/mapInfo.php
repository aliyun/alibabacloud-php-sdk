<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardPlanResponseBody\datas\config;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardPlanResponseBody\datas\config\mapInfo\list_;
use AlibabaCloud\Tea\Model;

class mapInfo extends Model
{
    /**
     * @description 图层归类名
     *
     * @var string
     */
    public $layer;

    /**
     * @description 图层信息
     *
     * @var list_[]
     */
    public $list;
    protected $_name = [
        'layer' => 'Layer',
        'list'  => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mapInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
