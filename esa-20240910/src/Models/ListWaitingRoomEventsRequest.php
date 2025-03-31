<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListWaitingRoomEventsRequest extends Model
{
    /**
     * @var int
     */
    public $siteId;

    /**
     * @var int
     */
    public $waitingRoomEventId;

    /**
     * @var string
     */
    public $waitingRoomId;
    protected $_name = [
        'siteId' => 'SiteId',
        'waitingRoomEventId' => 'WaitingRoomEventId',
        'waitingRoomId' => 'WaitingRoomId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->waitingRoomEventId) {
            $res['WaitingRoomEventId'] = $this->waitingRoomEventId;
        }

        if (null !== $this->waitingRoomId) {
            $res['WaitingRoomId'] = $this->waitingRoomId;
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['WaitingRoomEventId'])) {
            $model->waitingRoomEventId = $map['WaitingRoomEventId'];
        }

        if (isset($map['WaitingRoomId'])) {
            $model->waitingRoomId = $map['WaitingRoomId'];
        }

        return $model;
    }
}
