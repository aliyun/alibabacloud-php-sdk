<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\Filters;

use AlibabaCloud\Dara\Model;

class termiatedTimeRange extends Model
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
