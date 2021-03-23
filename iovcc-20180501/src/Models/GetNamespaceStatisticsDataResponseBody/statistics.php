<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\GetNamespaceStatisticsDataResponseBody;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetNamespaceStatisticsDataResponseBody\statistics\series;
use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var series[]
     */
    public $series;
    protected $_name = [
        'categories' => 'Categories',
        'series'     => 'Series',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->series) {
            $res['Series'] = [];
            if (null !== $this->series && \is_array($this->series)) {
                $n = 0;
                foreach ($this->series as $item) {
                    $res['Series'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['Series'])) {
            if (!empty($map['Series'])) {
                $model->series = [];
                $n             = 0;
                foreach ($map['Series'] as $item) {
                    $model->series[$n++] = null !== $item ? series::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
