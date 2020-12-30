<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardResponseBody;

use AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardResponseBody\result\list_;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var int
     */
    public $num;
    protected $_name = [
        'list' => 'List',
        'num'  => 'Num',
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
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }

        return $model;
    }
}
