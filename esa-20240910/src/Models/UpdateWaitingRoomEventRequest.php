<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateWaitingRoomEventRequest extends Model
{
    /**
     * @description The content of the custom waiting room page. You must specify this parameter if you set WaitingRoomType to custom. The content must be Base64-encoded.
     *
     * @example html-yets-maqi1111
     *
     * @var string
     */
    public $customPageHtml;

    /**
     * @description The description of the waiting room.
     *
     * @example http://yywyyw.com
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
     * @example off
     *
     * @var string
     */
    public $disableSessionRenewalEnable;

    /**
     * @description Specifies whether to enable the waiting room event. Valid values:
     *
     *   `on`
     *   `off`
     *
     * @example on
     *
     * @var string
     */
    public $enable;

    /**
     * @description The end time of the event. This value is a UNIX timestamp.
     *
     * @example 1719849600
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether to enable JSON response. Valid values:
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
     * @description The default language. Valid values:
     *
     *   `enus`: English.
     *   `zhcn`: Simplified Chinese.
     *   `zhhk`: Traditional Chinese.
     *
     * @example enus
     *
     * @var string
     */
    public $language;

    /**
     * @description The name of the waiting room event.
     *
     * @var string
     */
    public $name;

    /**
     * @description The maximum number of new users per minute.
     *
     * @example 300
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
     *   reject-all: All requests are blocked from accessing the origin.
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
     * @example 1719763200
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The maximum number of active users.
     *
     * @example 200
     *
     * @var string
     */
    public $totalActiveUsers;

    /**
     * @description The ID of the waiting room event, which can be obtained by calling the [ListWaitingRoomEvents](https://help.aliyun.com/document_detail/2850279.html) operation.
     *
     * This parameter is required.
     *
     * @example 89677721098****
     *
     * @var int
     */
    public $waitingRoomEventId;

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
        'siteId' => 'SiteId',
        'startTime' => 'StartTime',
        'totalActiveUsers' => 'TotalActiveUsers',
        'waitingRoomEventId' => 'WaitingRoomEventId',
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
        if (null !== $this->waitingRoomEventId) {
            $res['WaitingRoomEventId'] = $this->waitingRoomEventId;
        }
        if (null !== $this->waitingRoomType) {
            $res['WaitingRoomType'] = $this->waitingRoomType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWaitingRoomEventRequest
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
        if (isset($map['WaitingRoomEventId'])) {
            $model->waitingRoomEventId = $map['WaitingRoomEventId'];
        }
        if (isset($map['WaitingRoomType'])) {
            $model->waitingRoomType = $map['WaitingRoomType'];
        }

        return $model;
    }
}
