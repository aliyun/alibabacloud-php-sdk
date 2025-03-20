<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomEventsResponseBody;

use AlibabaCloud\Tea\Model;

class waitingRoomEvents extends Model
{
    /**
     * @description The content of the custom waiting room page. This parameter is returned when the waiting room type is set to custom. The content is URL-encoded.
     *
     * @example html-yets-maqi1111
     *
     * @var string
     */
    public $customPageHtml;

    /**
     * @description The event description.
     *
     * @example terraform-example
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether session renewal is disabled. Valid values:
     *
     *   on
     *   off
     *
     * @example off
     *
     * @var string
     */
    public $disableSessionRenewalEnable;

    /**
     * @description The event status. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $enable;

    /**
     * @description The end time of the event. This value is a UNIX timestamp.
     *
     * @example 1719814497
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Indicates whether JOSN response is enabled. If JSON response is enabled, a JSON body is returned for requests to the waiting room with the header Accept: application/json. Valid values:
     *
     *   on
     *   off
     *
     * @example off
     *
     * @var string
     */
    public $jsonResponseEnable;

    /**
     * @description The language of the waiting room page. This parameter is returned when the waiting room type is set to default. Valid values:
     *
     *   enus: English.
     *   zhcn: Simplified Chinese.
     *   zhhk: Traditional Chinese.
     *
     * @example zhcn
     *
     * @var string
     */
    public $language;

    /**
     * @description The custom event name.
     *
     * @var string
     */
    public $name;

    /**
     * @description The maximum number of new users per minute.
     *
     * @example 11
     *
     * @var string
     */
    public $newUsersPerMinute;

    /**
     * @description Indicates whether pre-queuing is enabled. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $preQueueEnable;

    /**
     * @description The start time for pre-queuing. This value is a UNIX timestamp. This parameter is valid only when pre-queuing is enabled.
     *
     * @example 1719814097
     *
     * @var string
     */
    public $preQueueStartTime;

    /**
     * @description The queuing method. Valid values:
     *
     *   random: Users gain access to the origin randomly, regardless of the arrival time.
     *   fifo: Users gain access to the origin in order of arrival.
     *   passthrough: Users pass through the waiting room and go straight to the origin.
     *   reject-all: Users are blocked from reaching the origin.
     *
     * @example fifo
     *
     * @var string
     */
    public $queuingMethod;

    /**
     * @description The HTTP status code to return while a user is in the queue. Valid values:
     *
     *   200
     *   202
     *   429
     *
     * @example 200
     *
     * @var string
     */
    public $queuingStatusCode;

    /**
     * @description Indicates whether random queuing is enabled. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $randomPreQueueEnable;

    /**
     * @description The maximum duration for which a session remains valid after a user leaves the origin. Unit: minutes.
     *
     * @example 3
     *
     * @var string
     */
    public $sessionDuration;

    /**
     * @description The start time of the event. This value is a UNIX timestamp.
     *
     * @example 1719814398
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The maximum number of active users.
     *
     * @example 22
     *
     * @var string
     */
    public $totalActiveUsers;

    /**
     * @description The unique ID of the waiting room event.
     *
     * @example 89677721098****
     *
     * @var int
     */
    public $waitingRoomEventId;

    /**
     * @description The ID of the waiting room associated with the event.
     *
     * @example 5c938a045c9ca46607163d34966****
     *
     * @var string
     */
    public $waitingRoomId;

    /**
     * @description The type of the waiting room. Valid values:
     *
     *   default
     *   custom
     *
     * @example custom
     *
     * @var string
     */
    public $waitingRoomType;
    protected $_name = [
        'customPageHtml' => 'CustomPageHtml',
        'description' => 'Description',
        'disableSessionRenewalEnable' => 'DisableSessionRenewalEnable',
        'enable' => 'Enable',
        'endTime' => 'EndTime',
        'jsonResponseEnable' => 'JsonResponseEnable',
        'language' => 'Language',
        'name' => 'Name',
        'newUsersPerMinute' => 'NewUsersPerMinute',
        'preQueueEnable' => 'PreQueueEnable',
        'preQueueStartTime' => 'PreQueueStartTime',
        'queuingMethod' => 'QueuingMethod',
        'queuingStatusCode' => 'QueuingStatusCode',
        'randomPreQueueEnable' => 'RandomPreQueueEnable',
        'sessionDuration' => 'SessionDuration',
        'startTime' => 'StartTime',
        'totalActiveUsers' => 'TotalActiveUsers',
        'waitingRoomEventId' => 'WaitingRoomEventId',
        'waitingRoomId' => 'WaitingRoomId',
        'waitingRoomType' => 'WaitingRoomType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customPageHtml) {
            $res['CustomPageHtml'] = $this->customPageHtml;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disableSessionRenewalEnable) {
            $res['DisableSessionRenewalEnable'] = $this->disableSessionRenewalEnable;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jsonResponseEnable) {
            $res['JsonResponseEnable'] = $this->jsonResponseEnable;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newUsersPerMinute) {
            $res['NewUsersPerMinute'] = $this->newUsersPerMinute;
        }
        if (null !== $this->preQueueEnable) {
            $res['PreQueueEnable'] = $this->preQueueEnable;
        }
        if (null !== $this->preQueueStartTime) {
            $res['PreQueueStartTime'] = $this->preQueueStartTime;
        }
        if (null !== $this->queuingMethod) {
            $res['QueuingMethod'] = $this->queuingMethod;
        }
        if (null !== $this->queuingStatusCode) {
            $res['QueuingStatusCode'] = $this->queuingStatusCode;
        }
        if (null !== $this->randomPreQueueEnable) {
            $res['RandomPreQueueEnable'] = $this->randomPreQueueEnable;
        }
        if (null !== $this->sessionDuration) {
            $res['SessionDuration'] = $this->sessionDuration;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalActiveUsers) {
            $res['TotalActiveUsers'] = $this->totalActiveUsers;
        }
        if (null !== $this->waitingRoomEventId) {
            $res['WaitingRoomEventId'] = $this->waitingRoomEventId;
        }
        if (null !== $this->waitingRoomId) {
            $res['WaitingRoomId'] = $this->waitingRoomId;
        }
        if (null !== $this->waitingRoomType) {
            $res['WaitingRoomType'] = $this->waitingRoomType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return waitingRoomEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomPageHtml'])) {
            $model->customPageHtml = $map['CustomPageHtml'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisableSessionRenewalEnable'])) {
            $model->disableSessionRenewalEnable = $map['DisableSessionRenewalEnable'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JsonResponseEnable'])) {
            $model->jsonResponseEnable = $map['JsonResponseEnable'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewUsersPerMinute'])) {
            $model->newUsersPerMinute = $map['NewUsersPerMinute'];
        }
        if (isset($map['PreQueueEnable'])) {
            $model->preQueueEnable = $map['PreQueueEnable'];
        }
        if (isset($map['PreQueueStartTime'])) {
            $model->preQueueStartTime = $map['PreQueueStartTime'];
        }
        if (isset($map['QueuingMethod'])) {
            $model->queuingMethod = $map['QueuingMethod'];
        }
        if (isset($map['QueuingStatusCode'])) {
            $model->queuingStatusCode = $map['QueuingStatusCode'];
        }
        if (isset($map['RandomPreQueueEnable'])) {
            $model->randomPreQueueEnable = $map['RandomPreQueueEnable'];
        }
        if (isset($map['SessionDuration'])) {
            $model->sessionDuration = $map['SessionDuration'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalActiveUsers'])) {
            $model->totalActiveUsers = $map['TotalActiveUsers'];
        }
        if (isset($map['WaitingRoomEventId'])) {
            $model->waitingRoomEventId = $map['WaitingRoomEventId'];
        }
        if (isset($map['WaitingRoomId'])) {
            $model->waitingRoomId = $map['WaitingRoomId'];
        }
        if (isset($map['WaitingRoomType'])) {
            $model->waitingRoomType = $map['WaitingRoomType'];
        }

        return $model;
    }
}
