<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\panes;

use AlibabaCloud\Dara\Model;

class whiteboard extends Model
{
    /**
     * @var string
     */
    public $whiteboardId;
    protected $_name = [
        'whiteboardId' => 'WhiteboardId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->whiteboardId) {
            $res['WhiteboardId'] = $this->whiteboardId;
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
        if (isset($map['WhiteboardId'])) {
            $model->whiteboardId = $map['WhiteboardId'];
        }

        return $model;
    }
}
