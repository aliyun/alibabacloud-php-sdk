<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDDoSTrafficInfoResponseBody\timeScopes;

use AlibabaCloud\Tea\Model;

class timeScope extends Model
{
    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $start;
    protected $_name = [
        'interval' => 'Interval',
        'start'    => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeScope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
