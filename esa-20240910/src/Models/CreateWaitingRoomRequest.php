<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateWaitingRoomRequest\hostNameAndPath;
use AlibabaCloud\Tea\Model;

class CreateWaitingRoomRequest extends Model
{
    /**
     * @description The name of the custom cookie.
     *
     * This parameter is required.
     *
     * @example __aliwaitingroom_example
     *
     * @var string
     */
    public $cookieName;

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
     * @description The hostname and path.
     *
     * This parameter is required.
     *
     * @var hostNameAndPath[]
     */
    public $hostNameAndPath;

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
     * @example enus
     *
     * @var string
     */
    public $language;

    /**
     * @description The name of the waiting room.
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
     * @example 200
     *
     * @var string
     */
    public $newUsersPerMinute;

    /**
     * @description Specifies whether to queue all requests. Valid values:
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
     * This parameter is required.
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
     * This parameter is required.
     *
     * @example 200
     *
     * @var string
     */
    public $queuingStatusCode;

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
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The maximum number of active users.
     *
     * This parameter is required.
     *
     * @example 300
     *
     * @var string
     */
    public $totalActiveUsers;

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
        'cookieName' => 'CookieName',
        'customPageHtml' => 'CustomPageHtml',
        'description' => 'Description',
        'disableSessionRenewalEnable' => 'DisableSessionRenewalEnable',
        'enable' => 'Enable',
        'hostNameAndPath' => 'HostNameAndPath',
        'jsonResponseEnable' => 'JsonResponseEnable',
        'language' => 'Language',
        'name' => 'Name',
        'newUsersPerMinute' => 'NewUsersPerMinute',
        'queueAllEnable' => 'QueueAllEnable',
        'queuingMethod' => 'QueuingMethod',
        'queuingStatusCode' => 'QueuingStatusCode',
        'sessionDuration' => 'SessionDuration',
        'siteId' => 'SiteId',
        'totalActiveUsers' => 'TotalActiveUsers',
        'waitingRoomType' => 'WaitingRoomType',
    ];

    public function validate() {}

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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->totalActiveUsers) {
            $res['TotalActiveUsers'] = $this->totalActiveUsers;
        }
        if (null !== $this->waitingRoomType) {
            $res['WaitingRoomType'] = $this->waitingRoomType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWaitingRoomRequest
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
                $n = 0;
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['TotalActiveUsers'])) {
            $model->totalActiveUsers = $map['TotalActiveUsers'];
        }
        if (isset($map['WaitingRoomType'])) {
            $model->waitingRoomType = $map['WaitingRoomType'];
        }

        return $model;
    }
}
