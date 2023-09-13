<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\runOptions;

use AlibabaCloud\Tea\Model;

class batchWindow extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $countBasedWindow;

    /**
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
