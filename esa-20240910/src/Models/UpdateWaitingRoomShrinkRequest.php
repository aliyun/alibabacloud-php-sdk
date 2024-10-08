<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateWaitingRoomShrinkRequest extends Model
{
    /**
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
     * @example on
     *
     * @var string
     */
    public $enable;

    /**
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
     * @example zhcn
     *
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $name;

    /**
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
     * @example random
     *
     * @var string
     */
    public $queuingMethod;

    /**
     * @example 200
     *
     * @var string
     */
    public $queuingStatusCode;

    /**
     * @example 5
     *
     * @var string
     */
    public $sessionDuration;

    /**
     * @description This parameter is required.
     *
     * @example 7096621098****
     *
     * @var int
     */
    public $siteId;

    /**
     * @example 300
     *
     * @var string
     */
    public $totalActiveUsers;

    /**
     * @description This parameter is required.
     *
     * @example 6a51d5bc6460887abd129****
     *
     * @var string
     */
    public $waitingRoomId;

    /**
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
     * @return UpdateWaitingRoomShrinkRequest
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
        if (isset($map['WaitingRoomId'])) {
            $model->waitingRoomId = $map['WaitingRoomId'];
        }
        if (isset($map['WaitingRoomType'])) {
            $model->waitingRoomType = $map['WaitingRoomType'];
        }

        return $model;
    }
}
