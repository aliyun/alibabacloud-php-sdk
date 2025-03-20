<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListWaitingRoomEventsRequest extends Model
{
    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 7096621098****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The ID of the waiting room event. This parameter is optional. You can specify this parameter to query a specific waiting room event.
     *
     * @example 89677721098****
     *
     * @var int
     */
    public $waitingRoomEventId;

    /**
     * @description The unique ID of the waiting room, which can be obtained by calling the [ListWaitingRooms](https://help.aliyun.com/document_detail/2850279.html) operation.
     *
     * This parameter is required.
     *
     * @example 6a51d5bc6460887abd129****
     *
     * @var string
     */
    public $waitingRoomId;
    protected $_name = [
        'siteId' => 'SiteId',
        'waitingRoomEventId' => 'WaitingRoomEventId',
        'waitingRoomId' => 'WaitingRoomId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListWaitingRoomEventsRequest
     */
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
