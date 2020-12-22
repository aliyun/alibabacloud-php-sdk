<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponse\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponse\data\lungNodule\series;
use AlibabaCloud\Tea\Model;

class lungNodule extends Model
{
    /**
     * @var series[]
     */
    public $series;
    protected $_name = [
        'series' => 'Series',
    ];

    public function validate()
    {
        Model::validateRequired('series', $this->series, true);
    }

    public function toMap()
    {
        $res = [];
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
     * @return lungNodule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
