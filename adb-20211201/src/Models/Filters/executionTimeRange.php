<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\Filters;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
