<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomsResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListWaitingRoomsResponseBody\waitingRooms\hostNameAndPath;
use AlibabaCloud\Tea\Model;

class waitingRooms extends Model
{
    /**
     * @description The name of the custom cookie.
     *
     * @example __aliwaitingroom_example
     *
     * @var string
     */
    public $cookieName;

    /**
     * @description The HTML content or identifier of the custom queuing page. This parameter is valid only when `WaitingRoomType` is set to `custom`. The content must be URL-encoded.
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
     * @description Indicates whether session renewal is disabled. Valid values:
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
     * @description Indicates whether the waiting room is enabled. Valid values:
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
     * @description The hostname and path.
     *
     * @var hostNameAndPath[]
     */
    public $hostNameAndPath;

    /**
     * @description Indicates whether JSON response is enabled. If you set this parameter to on, a JSON body is returned for requests to the waiting room with the header Accept: application/json. Valid values:
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
     * @description The name of the waiting room.
     *
     * @var string
     */
    public $name;

    /**
     * @description The maximum number of new users per minute.
     *
     * @example 200
     *
     * @var string
     */
    public $newUsersPerMinute;

    /**
     * @description Indicates whether all requests must be queued. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $queueAllEnable;

    /**
     * @description The queuing method. Valid values:
     *
     *   random: Users gain access to the origin randomly, regardless of the arrival time.
     *   fifo: Users gain access to the origin in order of arrival.
     *   passthrough: Users pass through the waiting room and go straight to the origin.
     *   reject-all: Users are blocked from reaching the origin.
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
     * @example 200
     *
     * @var string
     */
    public $queuingStatusCode;

    /**
     * @description The maximum duration for which a session remains valid after a user leaves the origin. Unit: minutes.
     *
     * @example 3600
     *
     * @var string
     */
    public $sessionDuration;

    /**
     * @description The maximum number of active users.
     *
     * @example 300
     *
     * @var string
     */
    public $totalActiveUsers;

    /**
     * @description The unique ID of the waiting room.
     *
     * @example 6a51d5bc6460887abd1291dc7d4d****
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
     * @example default
     *
     * @var string
     */
    public $waitingRoomType;
    protected $_name = [
        'cookieName'                  => 'CookieName',
        'customPageHtml'              => 'CustomPageHtml',
        'description'                 => 'Description',
        'disableSessionRenewalEnable' => 'DisableSessionRenewalEnable',
        'enable'                      => 'Enable',
        'hostNameAndPath'             => 'HostNameAndPath',
        'jsonResponseEnable'          => 'JsonResponseEnable',
        'language'                    => 'Language',
        'name'                        => 'Name',
        'newUsersPerMinute'           => 'NewUsersPerMinute',
        'queueAllEnable'              => 'QueueAllEnable',
        'queuingMethod'               => 'QueuingMethod',
        'queuingStatusCode'           => 'QueuingStatusCode',
        'sessionDuration'             => 'SessionDuration',
        'totalActiveUsers'            => 'TotalActiveUsers',
        'waitingRoomId'               => 'WaitingRoomId',
        'waitingRoomType'             => 'WaitingRoomType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookieName) {
            $res['CookieName'] = $this->cookieName;
        }
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
        if (null !== $this->hostNameAndPath) {
            $res['HostNameAndPath'] = [];
            if (null !== $this->hostNameAndPath && \is_array($this->hostNameAndPath)) {
                $n = 0;
                foreach ($this->hostNameAndPath as $item) {
                    $res['HostNameAndPath'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->queueAllEnable) {
            $res['QueueAllEnable'] = $this->queueAllEnable;
        }
        if (null !== $this->queuingMethod) {
            $res['QueuingMethod'] = $this->queuingMethod;
        }
        if (null !== $this->queuingStatusCode) {
            $res['QueuingStatusCode'] = $this->queuingStatusCode;
        }
        if (null !== $this->sessionDuration) {
            $res['SessionDuration'] = $this->sessionDuration;
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
     * @return waitingRooms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CookieName'])) {
            $model->cookieName = $map['CookieName'];
        }
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
        if (isset($map['HostNameAndPath'])) {
            if (!empty($map['HostNameAndPath'])) {
                $model->hostNameAndPath = [];
                $n                      = 0;
                foreach ($map['HostNameAndPath'] as $item) {
                    $model->hostNameAndPath[$n++] = null !== $item ? hostNameAndPath::fromMap($item) : $item;
                }
            }
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
        if (isset($map['QueueAllEnable'])) {
            $model->queueAllEnable = $map['QueueAllEnable'];
        }
        if (isset($map['QueuingMethod'])) {
            $model->queuingMethod = $map['QueuingMethod'];
        }
        if (isset($map['QueuingStatusCode'])) {
            $model->queuingStatusCode = $map['QueuingStatusCode'];
        }
        if (isset($map['SessionDuration'])) {
            $model->sessionDuration = $map['SessionDuration'];
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
