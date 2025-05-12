<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotTrackingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotTrackingResponseBody\data\flame;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotTrackingResponseBody\data\series;

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

    public function validate()
    {
        if (null !== $this->flame) {
            $this->flame->validate();
        }
        if (null !== $this->series) {
            $this->series->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flame) {
            $res['flame'] = null !== $this->flame ? $this->flame->toArray($noStream) : $this->flame;
        }

        if (null !== $this->series) {
            $res['series'] = null !== $this->series ? $this->series->toArray($noStream) : $this->series;
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
        if (isset($map['flame'])) {
            $model->flame = flame::fromMap($map['flame']);
        }

        if (isset($map['series'])) {
            $model->series = series::fromMap($map['series']);
        }

        return $model;
    }
}
