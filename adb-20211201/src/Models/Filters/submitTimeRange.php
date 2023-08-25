<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\Filters;

use AlibabaCloud\Tea\Model;

class submitTimeRange extends Model
{
    /**
     * @var int
     */
    public $maxTimeInMills;

    /**
     * @var int
     */
    public $minTimeInMills;
    protected $_name = [
        'maxTimeInMills' => 'MaxTimeInMills',
        'minTimeInMills' => 'MinTimeInMills',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxTimeInMills) {
            $res['MaxTimeInMills'] = $this->maxTimeInMills;
        }
        if (null !== $this->minTimeInMills) {
            $res['MinTimeInMills'] = $this->minTimeInMills;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return submitTimeRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxTimeInMills'])) {
            $model->maxTimeInMills = $map['MaxTimeInMills'];
        }
        if (isset($map['MinTimeInMills'])) {
            $model->minTimeInMills = $map['MinTimeInMills'];
        }

        return $model;
    }
}
