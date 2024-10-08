<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListWaitingRoomsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 120876698010528
     *
     * @var int
     */
    public $siteId;

    /**
     * @example 6a51d5bc6460887abd1291dc7d4d****
     *
     * @var string
     */
    public $waitingRoomId;
    protected $_name = [
        'siteId'        => 'SiteId',
        'waitingRoomId' => 'WaitingRoomId',
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
        if (null !== $this->waitingRoomId) {
            $res['WaitingRoomId'] = $this->waitingRoomId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWaitingRoomsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['WaitingRoomId'])) {
            $model->waitingRoomId = $map['WaitingRoomId'];
        }

        return $model;
    }
}
