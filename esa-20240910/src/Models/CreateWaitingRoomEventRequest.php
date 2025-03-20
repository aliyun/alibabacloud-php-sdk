<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateWaitingRoomEventRequest extends Model
{
    /**
     * @description The content of the custom waiting room page. You must specify this parameter if you set WaitingRoomType to custom. The content must be Base64-encoded.
     *
     * @example Hello%20world!
     *
     * @var string
     */
    public $customPageHtml;

    /**
     * @description The description of the waiting room.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to disable session renewal. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $disableSessionRenewalEnable;

    /**
     * @description Specifies whether to enable the waiting room. Valid values:
     *
     *   on
     *   off
     *
     * This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $enable;

    /**
     * @description The end time of the event. This value is a UNIX timestamp.
     *
     * This parameter is required.
     *
     * @example 1719849600
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether to enable JSON response. If you set this parameter to on, a JSON body is returned for requests to the waiting room with the header Accept: application/json. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $jsonResponseEnable;

    /**
     * @description The language of the waiting room page. You must specify this parameter if you set WaitingRoomType to default. Valid values:
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
     * @description The name of the waiting room event.
     *
     * This parameter is required.
     *
     * @example waitingroom_example
     *
     * @var string
     */
    public $name;

    /**
     * @description The maximum number of new users per minute.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var string
     */
    public $newUsersPerMinute;

    /**
     * @description Specifies whether to enable pre-queuing.
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
     * @description The start time for pre-queuing.
     *
     * @example 1719763200
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
     * This parameter is required.
     *
     * @example random
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
     * This parameter is required.
     *
     * @example 202
     *
     * @var string
     */
    public $queuingStatusCode;

    /**
     * @description Specifies whether to enable random queuing.
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
     * This parameter is required.
     *
     * @example 5
     *
     * @var string
     */
    public $sessionDuration;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The start time of the event. This value is a UNIX timestamp.
     *
     * This parameter is required.
     *
     * @example 1719763200
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The maximum number of active users.
     *
     * This parameter is required.
     *
     * @example 100
     *
     * @var string
     */
    public $totalActiveUsers;

    /**
     * @description The ID of the waiting room, which can be obtained by calling the [ListWaitingRooms](https://help.aliyun.com/document_detail/2850279.html) operation.
     *
     * @example 6a51d5bc6460887abd1291dc7d4db28b
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
     * This parameter is required.
     *
     * @example default
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
        'siteId' => 'SiteId',
        'startTime' => 'StartTime',
        'totalActiveUsers' => 'TotalActiveUsers',
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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->totalActiveUsers) {
            $res['TotalActiveUsers'] = $this->totalActiveUsers;
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
     * @return CreateWaitingRoomEventRequest
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TotalActiveUsers'])) {
            $model->totalActiveUsers = $map['TotalActiveUsers'];
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
