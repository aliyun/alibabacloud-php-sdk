<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListOnCallSchedulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListOnCallSchedulesResponseBody\pageBean\onCallSchedules;

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
        if (\is_array($this->onCallSchedules)) {
            Model::validateArray($this->onCallSchedules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onCallSchedules) {
            if (\is_array($this->onCallSchedules)) {
                $res['OnCallSchedules'] = [];
                $n1                     = 0;
                foreach ($this->onCallSchedules as $item1) {
                    $res['OnCallSchedules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnCallSchedules'])) {
            if (!empty($map['OnCallSchedules'])) {
                $model->onCallSchedules = [];
                $n1                     = 0;
                foreach ($map['OnCallSchedules'] as $item1) {
                    $model->onCallSchedules[$n1++] = onCallSchedules::fromMap($item1);
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
