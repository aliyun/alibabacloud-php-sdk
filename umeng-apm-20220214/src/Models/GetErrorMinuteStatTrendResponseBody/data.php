<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetErrorMinuteStatTrendResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 120
     *
     * @var int
     */
    public $errorCount;

    /**
     * @example 1200
     *
     * @var int
     */
    public $launchCount;

    /**
     * @example 2023-05-20 13:01
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'errorCount'  => 'errorCount',
        'launchCount' => 'launchCount',
        'timePoint'   => 'timePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCount) {
            $res['errorCount'] = $this->errorCount;
        }
        if (null !== $this->launchCount) {
            $res['launchCount'] = $this->launchCount;
        }
        if (null !== $this->timePoint) {
            $res['timePoint'] = $this->timePoint;
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
        if (isset($map['errorCount'])) {
            $model->errorCount = $map['errorCount'];
        }
        if (isset($map['launchCount'])) {
            $model->launchCount = $map['launchCount'];
        }
        if (isset($map['timePoint'])) {
            $model->timePoint = $map['timePoint'];
        }

        return $model;
    }
}
