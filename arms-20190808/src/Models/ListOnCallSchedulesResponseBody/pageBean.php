<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListOnCallSchedulesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListOnCallSchedulesResponseBody\pageBean\onCallSchedules;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @var onCallSchedules[]
     */
    public $onCallSchedules;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'onCallSchedules' => 'OnCallSchedules',
        'page'            => 'Page',
        'size'            => 'Size',
        'total'           => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onCallSchedules) {
            $res['OnCallSchedules'] = [];
            if (null !== $this->onCallSchedules && \is_array($this->onCallSchedules)) {
                $n = 0;
                foreach ($this->onCallSchedules as $item) {
                    $res['OnCallSchedules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnCallSchedules'])) {
            if (!empty($map['OnCallSchedules'])) {
                $model->onCallSchedules = [];
                $n                      = 0;
                foreach ($map['OnCallSchedules'] as $item) {
                    $model->onCallSchedules[$n++] = null !== $item ? onCallSchedules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
