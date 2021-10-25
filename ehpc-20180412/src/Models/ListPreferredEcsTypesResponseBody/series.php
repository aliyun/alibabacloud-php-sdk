<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\seriesInfo;
use AlibabaCloud\Tea\Model;

class series extends Model
{
    /**
     * @var seriesInfo[]
     */
    public $seriesInfo;
    protected $_name = [
        'seriesInfo' => 'SeriesInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->seriesInfo) {
            $res['SeriesInfo'] = [];
            if (null !== $this->seriesInfo && \is_array($this->seriesInfo)) {
                $n = 0;
                foreach ($this->seriesInfo as $item) {
                    $res['SeriesInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return series
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SeriesInfo'])) {
            if (!empty($map['SeriesInfo'])) {
                $model->seriesInfo = [];
                $n                 = 0;
                foreach ($map['SeriesInfo'] as $item) {
                    $model->seriesInfo[$n++] = null !== $item ? seriesInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
