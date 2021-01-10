<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\transcodeOutput;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\transcodeOutput\clip\timeSpan;
use AlibabaCloud\Tea\Model;

class clip extends Model
{
    /**
     * @var timeSpan
     */
    public $timeSpan;
    protected $_name = [
        'timeSpan' => 'TimeSpan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeSpan) {
            $res['TimeSpan'] = null !== $this->timeSpan ? $this->timeSpan->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clip
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeSpan'])) {
            $model->timeSpan = timeSpan::fromMap($map['TimeSpan']);
        }

        return $model;
    }
}
