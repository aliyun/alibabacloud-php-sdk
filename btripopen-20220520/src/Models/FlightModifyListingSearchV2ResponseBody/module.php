<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\directFlightList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyListingSearchV2ResponseBody\module\transferFlightList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var directFlightList[]
     */
    public $directFlightList;

    /**
     * @var int
     */
    public $nextReqWaitTime;

    /**
     * @var bool
     */
    public $retry;

    /**
     * @var string
     */
    public $searchRetryToken;

    /**
     * @example a2ffebfe733742aab5c491d960ba3d59
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var transferFlightList[]
     */
    public $transferFlightList;

    /**
     * @var string
     */
    public $transferTitle;
    protected $_name = [
        'directFlightList'   => 'direct_flight_list',
        'nextReqWaitTime'    => 'next_req_wait_time',
        'retry'              => 'retry',
        'searchRetryToken'   => 'search_retry_token',
        'sessionId'          => 'session_id',
        'transferFlightList' => 'transfer_flight_list',
        'transferTitle'      => 'transfer_title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directFlightList) {
            $res['direct_flight_list'] = [];
            if (null !== $this->directFlightList && \is_array($this->directFlightList)) {
                $n = 0;
                foreach ($this->directFlightList as $item) {
                    $res['direct_flight_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextReqWaitTime) {
            $res['next_req_wait_time'] = $this->nextReqWaitTime;
        }
        if (null !== $this->retry) {
            $res['retry'] = $this->retry;
        }
        if (null !== $this->searchRetryToken) {
            $res['search_retry_token'] = $this->searchRetryToken;
        }
        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }
        if (null !== $this->transferFlightList) {
            $res['transfer_flight_list'] = [];
            if (null !== $this->transferFlightList && \is_array($this->transferFlightList)) {
                $n = 0;
                foreach ($this->transferFlightList as $item) {
                    $res['transfer_flight_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transferTitle) {
            $res['transfer_title'] = $this->transferTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['direct_flight_list'])) {
            if (!empty($map['direct_flight_list'])) {
                $model->directFlightList = [];
                $n                       = 0;
                foreach ($map['direct_flight_list'] as $item) {
                    $model->directFlightList[$n++] = null !== $item ? directFlightList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['next_req_wait_time'])) {
            $model->nextReqWaitTime = $map['next_req_wait_time'];
        }
        if (isset($map['retry'])) {
            $model->retry = $map['retry'];
        }
        if (isset($map['search_retry_token'])) {
            $model->searchRetryToken = $map['search_retry_token'];
        }
        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }
        if (isset($map['transfer_flight_list'])) {
            if (!empty($map['transfer_flight_list'])) {
                $model->transferFlightList = [];
                $n                         = 0;
                foreach ($map['transfer_flight_list'] as $item) {
                    $model->transferFlightList[$n++] = null !== $item ? transferFlightList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['transfer_title'])) {
            $model->transferTitle = $map['transfer_title'];
        }

        return $model;
    }
}
