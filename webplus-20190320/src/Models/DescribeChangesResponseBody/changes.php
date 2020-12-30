<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeChangesResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeChangesResponseBody\changes\change;
use AlibabaCloud\Tea\Model;

class changes extends Model
{
    /**
     * @var change[]
     */
    public $change;
    protected $_name = [
        'change' => 'Change',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->change) {
            $res['Change'] = [];
            if (null !== $this->change && \is_array($this->change)) {
                $n = 0;
                foreach ($this->change as $item) {
                    $res['Change'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Change'])) {
            if (!empty($map['Change'])) {
                $model->change = [];
                $n             = 0;
                foreach ($map['Change'] as $item) {
                    $model->change[$n++] = null !== $item ? change::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
