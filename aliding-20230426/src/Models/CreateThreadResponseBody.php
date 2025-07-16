<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateThreadResponseBody\thread;
use AlibabaCloud\Tea\Model;

class CreateThreadResponseBody extends Model
{
    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var thread
     */
    public $thread;
    protected $_name = [
        'requestId' => 'requestId',
        'thread' => 'thread',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->thread) {
            $res['thread'] = null !== $this->thread ? $this->thread->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateThreadResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['thread'])) {
            $model->thread = thread::fromMap($map['thread']);
        }

        return $model;
    }
}
