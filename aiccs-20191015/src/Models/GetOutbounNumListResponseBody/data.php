<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOutbounNumListResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOutbounNumListResponseBody\data\num;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOutbounNumListResponseBody\data\numGroup;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var num[]
     */
    public $num;

    /**
     * @var numGroup[]
     */
    public $numGroup;
    protected $_name = [
        'num'      => 'Num',
        'numGroup' => 'NumGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->num) {
            $res['Num'] = [];
            if (null !== $this->num && \is_array($this->num)) {
                $n = 0;
                foreach ($this->num as $item) {
                    $res['Num'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->numGroup) {
            $res['NumGroup'] = [];
            if (null !== $this->numGroup && \is_array($this->numGroup)) {
                $n = 0;
                foreach ($this->numGroup as $item) {
                    $res['NumGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Num'])) {
            if (!empty($map['Num'])) {
                $model->num = [];
                $n          = 0;
                foreach ($map['Num'] as $item) {
                    $model->num[$n++] = null !== $item ? num::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NumGroup'])) {
            if (!empty($map['NumGroup'])) {
                $model->numGroup = [];
                $n               = 0;
                foreach ($map['NumGroup'] as $item) {
                    $model->numGroup[$n++] = null !== $item ? numGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
