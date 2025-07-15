<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request;

use AlibabaCloud\Tea\Model;

class summarization extends Model
{
    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'event' => 'Event',
        'message' => 'Message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summarization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
