<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetProjectPhaseDetailResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetProjectPhaseDetailResponseBody\datas\list_;
use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 当前阶段返回时list下标
     *
     * @var int
     */
    public $currentPhase;

    /**
     * @var list_[]
     */
    public $list;
    protected $_name = [
        'currentPhase' => 'CurrentPhase',
        'list'         => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPhase) {
            $res['CurrentPhase'] = $this->currentPhase;
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
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPhase'])) {
            $model->currentPhase = $map['CurrentPhase'];
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
