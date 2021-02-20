<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoResponseBody\layout;

use AlibabaCloud\Tea\Model;

class panes extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoResponseBody\layout\panes\panes[]
     */
    public $panes;
    protected $_name = [
        'panes' => 'Panes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return panes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Panes'])) {
            if (!empty($map['Panes'])) {
                $model->panes = [];
                $n            = 0;
                foreach ($map['Panes'] as $item) {
                    $model->panes[$n++] = null !== $item ? \AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoResponseBody\layout\panes\panes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
