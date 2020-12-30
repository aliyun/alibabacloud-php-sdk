<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListTimeLinesResponseBody\timeLines;
use AlibabaCloud\Tea\Model;

class ListTimeLinesResponseBody extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $nextCursor;

    /**
     * @var timeLines[]
     */
    public $timeLines;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'action'     => 'Action',
        'nextCursor' => 'NextCursor',
        'timeLines'  => 'TimeLines',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'code'       => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->nextCursor) {
            $res['NextCursor'] = $this->nextCursor;
        }
        if (null !== $this->timeLines) {
            $res['TimeLines'] = [];
            if (null !== $this->timeLines && \is_array($this->timeLines)) {
                $n = 0;
                foreach ($this->timeLines as $item) {
                    $res['TimeLines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTimeLinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['NextCursor'])) {
            $model->nextCursor = $map['NextCursor'];
        }
        if (isset($map['TimeLines'])) {
            if (!empty($map['TimeLines'])) {
                $model->timeLines = [];
                $n                = 0;
                foreach ($map['TimeLines'] as $item) {
                    $model->timeLines[$n++] = null !== $item ? timeLines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
