<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryScheduleConferenceResponseBody extends Model
{
    /**
     * @example 1687928400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example [ "+86123xxxx" ]
     *
     * @var string[]
     */
    public $phones;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 838 722 xxxxx
     *
     * @var string
     */
    public $roomCode;

    /**
     * @example 2a489c68-xxxx-xxxx-xxxx-xxxxxxxxxxxx
     *
     * @var string
     */
    public $scheduleConferenceId;

    /**
     * @example 1687924800000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 预约会议标题
     *
     * @var string
     */
    public $title;

    /**
     * @example https://meeting.dingtalk.com/j/Bsbp3ixxxxxUyJJ9
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'endTime'              => 'endTime',
        'phones'               => 'phones',
        'requestId'            => 'requestId',
        'roomCode'             => 'roomCode',
        'scheduleConferenceId' => 'scheduleConferenceId',
        'startTime'            => 'startTime',
        'title'                => 'title',
        'url'                  => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->phones) {
            $res['phones'] = $this->phones;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->roomCode) {
            $res['roomCode'] = $this->roomCode;
        }
        if (null !== $this->scheduleConferenceId) {
            $res['scheduleConferenceId'] = $this->scheduleConferenceId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryScheduleConferenceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['phones'])) {
            if (!empty($map['phones'])) {
                $model->phones = $map['phones'];
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['roomCode'])) {
            $model->roomCode = $map['roomCode'];
        }
        if (isset($map['scheduleConferenceId'])) {
            $model->scheduleConferenceId = $map['scheduleConferenceId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
