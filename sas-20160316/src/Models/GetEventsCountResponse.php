<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20160316\Models;

use AlibabaCloud\SDK\Sas\V20160316\Models\GetEventsCountResponse\eventCount;
use AlibabaCloud\Tea\Model;

class GetEventsCountResponse extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var eventCount
     */
    public $eventCount;
    protected $_name = [
        'code'       => 'code',
        'message'    => 'message',
        'success'    => 'success',
        'eventCount' => 'EventCount',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('eventCount', $this->eventCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->eventCount) {
            $res['EventCount'] = null !== $this->eventCount ? $this->eventCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEventsCountResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['EventCount'])) {
            $model->eventCount = eventCount::fromMap($map['EventCount']);
        }

        return $model;
    }
}
