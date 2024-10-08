<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateWaitingRoomEventRequest extends Model
{
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
     * @example 1719849600
     *
     * @var string
     */
    public $endTime;

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
     * @example 10
     *
     * @var string
     */
    public $newUsersPerMinute;

    /**
     * @example on
     *
     * @var string
     */
    public $preQueueEnable;

    /**
     * @example 1719763200
     *
     * @var string
     */
    public $preQueueStartTime;

    /**
     * @description This parameter is required.
     *
     * @example random
     *
     * @var string
     */
    public $queuingMethod;

    /**
     * @description This parameter is required.
     *
     * @example 202
     *
     * @var string
     */
    public $queuingStatusCode;

    /**
     * @example on
     *
     * @var string
     */
    public $randomPreQueueEnable;

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
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description This parameter is required.
     *
     * @example 1719763200
     *
     * @var string
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var string
     */
    public $totalActiveUsers;

    /**
     * @example 6a51d5bc6460887abd1291dc7d4db28b
     *
     * @var string
     */
    public $waitingRoomId;

    /**
     * @description This parameter is required.
     *
     * @example default
     *
     * @var string
     */
    public $waitingRoomType;
    protected $_name = [
        'customPageHtml'              => 'CustomPageHtml',
        'description'                 => 'Description',
        'disableSessionRenewalEnable' => 'DisableSessionRenewalEnable',
        'enable'                      => 'Enable',
        'endTime'                     => 'EndTime',
        'jsonResponseEnable'          => 'JsonResponseEnable',
        'language'                    => 'Language',
        'name'                        => 'Name',
        'newUsersPerMinute'           => 'NewUsersPerMinute',
        'preQueueEnable'              => 'PreQueueEnable',
        'preQueueStartTime'           => 'PreQueueStartTime',
        'queuingMethod'               => 'QueuingMethod',
        'queuingStatusCode'           => 'QueuingStatusCode',
        'randomPreQueueEnable'        => 'RandomPreQueueEnable',
        'sessionDuration'             => 'SessionDuration',
        'siteId'                      => 'SiteId',
        'startTime'                   => 'StartTime',
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
