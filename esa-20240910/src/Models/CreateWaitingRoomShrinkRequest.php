<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateWaitingRoomShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example __aliwaitingroom_example
     *
     * @var string
     */
    public $cookieName;

    /**
     * @example Hello%20world!
     *
     * @var string
     */
    public $customPageHtml;

    /**
     * @var string
     */
    public $description;

    /**
     * @example on
     *
     * @var string
     */
    public $disableSessionRenewalEnable;

    /**
     * @description This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $enable;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $hostNameAndPathShrink;

    /**
     * @example on
     *
     * @var string
     */
    public $jsonResponseEnable;

    /**
     * @example enus
     *
     * @var string
     */
    public $language;

    /**
     * @description This parameter is required.
     *
     * @example waitingroom_example
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 200
     *
     * @var string
     */
    public $newUsersPerMinute;

    /**
     * @example on
     *
     * @var string
     */
    public $queueAllEnable;

    /**
     * @description This parameter is required.
     *
     * @example fifo
     *
     * @var string
     */
    public $queuingMethod;

    /**
     * @description This parameter is required.
     *
     * @example 200
     *
     * @var string
     */
    public $queuingStatusCode;

    /**
     * @description This parameter is required.
     *
     * @example 5
     *
     * @var string
     */
    public $sessionDuration;

    /**
     * @description This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description This parameter is required.
     *
     * @example 300
     *
     * @var string
     */
    public $totalActiveUsers;

    /**
     * @description This parameter is required.
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
        'hostNameAndPathShrink'       => 'HostNameAndPath',
        'jsonResponseEnable'          => 'JsonResponseEnable',
        'language'                    => 'Language',
        'name'                        => 'Name',
        'newUsersPerMinute'           => 'NewUsersPerMinute',
        'queueAllEnable'              => 'QueueAllEnable',
        'queuingMethod'               => 'QueuingMethod',
        'queuingStatusCode'           => 'QueuingStatusCode',
        'sessionDuration'             => 'SessionDuration',
        'siteId'                      => 'SiteId',
        'totalActiveUsers'            => 'TotalActiveUsers',
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
        if (null !== $this->hostNameAndPathShrink) {
            $res['HostNameAndPath'] = $this->hostNameAndPathShrink;
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
     * @return CreateWaitingRoomShrinkRequest
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
            $model->hostNameAndPathShrink = $map['HostNameAndPath'];
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
