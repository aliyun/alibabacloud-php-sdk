<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions;

use AlibabaCloud\Tea\Model;

class batchWindow extends Model
{
    /**
     * @description The maximum number of events that is allowed in the batch window. When this threshold is reached, data in the window is pushed to the downstream service. If multiple batch windows exist, data is pushed if triggering conditions are met in one of the windows.
     *
     * @example 100
     *
     * @var int
     */
    public $countBasedWindow;

    /**
     * @description The maximum period of time during which events are allowed in the batch window. Unit: seconds. When this threshold is reached, data in the window is pushed to the downstream service. If multiple batch windows exist, data is pushed if triggering conditions are met in one of the windows.
     *
     * @example 10
     *
     * @var int
     */
    public $timeBasedWindow;
    protected $_name = [
        'countBasedWindow' => 'CountBasedWindow',
        'timeBasedWindow'  => 'TimeBasedWindow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countBasedWindow) {
            $res['CountBasedWindow'] = $this->countBasedWindow;
        }
        if (null !== $this->timeBasedWindow) {
            $res['TimeBasedWindow'] = $this->timeBasedWindow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchWindow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CountBasedWindow'])) {
            $model->countBasedWindow = $map['CountBasedWindow'];
        }
        if (isset($map['TimeBasedWindow'])) {
            $model->timeBasedWindow = $map['TimeBasedWindow'];
        }

        return $model;
    }
}
