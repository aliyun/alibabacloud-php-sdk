<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DeleteWaitingRoomEventRequest extends Model
{
    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The ID of the waiting room event.
     *
     * @example 302909890***
     *
     * @var int
     */
    public $waitingRoomEventId;
    protected $_name = [
        'siteId'             => 'SiteId',
        'waitingRoomEventId' => 'WaitingRoomEventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->waitingRoomEventId) {
            $res['WaitingRoomEventId'] = $this->waitingRoomEventId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWaitingRoomEventRequest
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

        return $model;
    }
}
