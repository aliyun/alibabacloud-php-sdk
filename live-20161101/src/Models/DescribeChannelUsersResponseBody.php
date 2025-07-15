<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeChannelUsersResponseBody extends Model
{
    /**
     * @description The list of streamers/co-streamers.
     *
     * @var string[]
     */
    public $interactiveUserList;

    /**
     * @description The number of co-streamers.
     *
     * @example 1
     *
     * @var int
     */
    public $interactiveUserNumber;

    /**
     * @description Indicates whether the channel exists. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > After all users leave the channel, the system requires a few seconds to clear the cache. If you call the operation during this period, the value of this parameter is true, and the value of InteractiveUserNumber and LiveUserNumber is 0.
     *
     * @example true
     *
     * @var bool
     */
    public $isChannelExists;

    /**
     * @description The list of viewers.
     *
     * @var string[]
     */
    public $liveUserList;

    /**
     * @description The number of viewers.
     *
     * @example 1
     *
     * @var int
     */
    public $liveUserNumber;

    /**
     * @description The ID of the request.
     *
     * @example AD86847D-1F36-18C8-A995-5EEA340B3202
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The UTC timestamp when the response is returned.
     *
     * @example 1691027655
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'interactiveUserList' => 'InteractiveUserList',
        'interactiveUserNumber' => 'InteractiveUserNumber',
        'isChannelExists' => 'IsChannelExists',
        'liveUserList' => 'LiveUserList',
        'liveUserNumber' => 'LiveUserNumber',
        'requestId' => 'RequestId',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->interactiveUserList) {
            $res['InteractiveUserList'] = $this->interactiveUserList;
        }
        if (null !== $this->interactiveUserNumber) {
            $res['InteractiveUserNumber'] = $this->interactiveUserNumber;
        }
        if (null !== $this->isChannelExists) {
            $res['IsChannelExists'] = $this->isChannelExists;
        }
        if (null !== $this->liveUserList) {
            $res['LiveUserList'] = $this->liveUserList;
        }
        if (null !== $this->liveUserNumber) {
            $res['LiveUserNumber'] = $this->liveUserNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelUsersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InteractiveUserList'])) {
            if (!empty($map['InteractiveUserList'])) {
                $model->interactiveUserList = $map['InteractiveUserList'];
            }
        }
        if (isset($map['InteractiveUserNumber'])) {
            $model->interactiveUserNumber = $map['InteractiveUserNumber'];
        }
        if (isset($map['IsChannelExists'])) {
            $model->isChannelExists = $map['IsChannelExists'];
        }
        if (isset($map['LiveUserList'])) {
            if (!empty($map['LiveUserList'])) {
                $model->liveUserList = $map['LiveUserList'];
            }
        }
        if (isset($map['LiveUserNumber'])) {
            $model->liveUserNumber = $map['LiveUserNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
