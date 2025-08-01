<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotTrackingResponseBody;

use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotTrackingResponseBody\data\flame;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotTrackingResponseBody\data\series;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var flame
     */
    public $flame;

    /**
     * @var series
     */
    public $series;
    protected $_name = [
        'flame' => 'flame',
        'series' => 'series',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->flame) {
            $res['flame'] = null !== $this->flame ? $this->flame->toMap() : null;
        }
        if (null !== $this->series) {
            $res['series'] = null !== $this->series ? $this->series->toMap() : null;
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
        if (isset($map['flame'])) {
            $model->flame = flame::fromMap($map['flame']);
        }
        if (isset($map['series'])) {
            $model->series = series::fromMap($map['series']);
        }

        return $model;
    }
}
