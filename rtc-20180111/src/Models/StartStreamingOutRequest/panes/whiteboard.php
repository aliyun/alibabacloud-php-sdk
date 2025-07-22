<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutRequest\panes;

use AlibabaCloud\Tea\Model;

class whiteboard extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $whiteboardId;
    protected $_name = [
        'whiteboardId' => 'WhiteboardId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteboardId) {
            $res['WhiteboardId'] = $this->whiteboardId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return whiteboard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteboardId'])) {
            $model->whiteboardId = $map['WhiteboardId'];
        }

        return $model;
    }
}
