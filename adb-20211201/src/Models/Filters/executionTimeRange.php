<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\Filters;

use AlibabaCloud\Tea\Model;

class executionTimeRange extends Model
{
    /**
     * @var int
     */
    public $maxTimeInSeconds;

    /**
     * @var int
     */
    public $minTimeInSeconds;
    protected $_name = [
        'maxTimeInSeconds' => 'MaxTimeInSeconds',
        'minTimeInSeconds' => 'MinTimeInSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxTimeInSeconds) {
            $res['MaxTimeInSeconds'] = $this->maxTimeInSeconds;
        }
        if (null !== $this->minTimeInSeconds) {
            $res['MinTimeInSeconds'] = $this->minTimeInSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionTimeRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxTimeInSeconds'])) {
            $model->maxTimeInSeconds = $map['MaxTimeInSeconds'];
        }
        if (isset($map['MinTimeInSeconds'])) {
            $model->minTimeInSeconds = $map['MinTimeInSeconds'];
        }

        return $model;
    }
}
