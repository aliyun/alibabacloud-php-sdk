<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $lines;

    /**
     * @example 16643
     *
     * @var string
     */
    public $threadId;
    protected $_name = [
        'lines'    => 'Lines',
        'threadId' => 'ThreadId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }
        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
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
        if (isset($map['Lines'])) {
            if (!empty($map['Lines'])) {
                $model->lines = $map['Lines'];
            }
        }
        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }

        return $model;
    }
}
