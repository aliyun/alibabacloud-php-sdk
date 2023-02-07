<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData\data\extAttrs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 905
     *
     * @var int
     */
    public $buId;

    /**
     * @example 4f8807a9de024507a3090b5b66a8****
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1
     *
     * @var int
     */
    public $channelType;

    /**
     * @example 1611207976000
     *
     * @var int
     */
    public $closeTime;

    /**
     * @var string
     */
    public $commonQueueName;

    /**
     * @example 100
     *
     * @var int
     */
    public $depId;

    /**
     * @var extAttrs
     */
    public $extAttrs;

    /**
     * @var mixed[]
     */
    public $extAttrsString;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $feedback;

    /**
     * @example 1611209971000
     *
     * @var int
     */
    public $firstTime;

    /**
     * @example 6400665****
     *
     * @var int
     */
    public $fromId;

    /**
     * @example 1611209971000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1611207979000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 6400665****
     *
     * @var int
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @example 0
     *
     * @var int
     */
    public $parentTouchId;

    /**
     * @example 111
     *
     * @var int
     */
    public $queueId;

    /**
     * @example 67****
     *
     * @var int
     */
    public $servicerId;

    /**
     * @example 13900001234
     *
     * @var string
     */
    public $servicerName;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example null
     *
     * @var string
     */
    public $switchUser;

    /**
     * @example 678026
     *
     * @var int
     */
    public $toId;

    /**
     * @example 1
     *
     * @var string
     */
    public $touchContent;

    /**
     * @example 2
     *
     * @var int
     */
    public $touchEndReason;

    /**
     * @example 1386****
     *
     * @var string
     */
    public $touchId;

    /**
     * @example 111
     *
     * @var string
     */
    public $touchTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $touchType;

    /**
     * @example 1386****
     *
     * @var int
     */
    public $userTouchId;
    protected $_name = [
        'buId'            => 'BuId',
        'channelId'       => 'ChannelId',
        'channelType'     => 'ChannelType',
        'closeTime'       => 'CloseTime',
        'commonQueueName' => 'CommonQueueName',
        'depId'           => 'DepId',
        'extAttrs'        => 'ExtAttrs',
        'extAttrsString'  => 'ExtAttrsString',
        'feedback'        => 'Feedback',
        'firstTime'       => 'FirstTime',
        'fromId'          => 'FromId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'memberId'        => 'MemberId',
        'memberName'      => 'MemberName',
        'parentTouchId'   => 'ParentTouchId',
        'queueId'         => 'QueueId',
        'servicerId'      => 'ServicerId',
        'servicerName'    => 'ServicerName',
        'status'          => 'Status',
        'switchUser'      => 'SwitchUser',
        'toId'            => 'ToId',
        'touchContent'    => 'TouchContent',
        'touchEndReason'  => 'TouchEndReason',
        'touchId'         => 'TouchId',
        'touchTime'       => 'TouchTime',
        'touchType'       => 'TouchType',
        'userTouchId'     => 'UserTouchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->closeTime) {
            $res['CloseTime'] = $this->closeTime;
        }
        if (null !== $this->commonQueueName) {
            $res['CommonQueueName'] = $this->commonQueueName;
        }
        if (null !== $this->depId) {
            $res['DepId'] = $this->depId;
        }
        if (null !== $this->extAttrs) {
            $res['ExtAttrs'] = null !== $this->extAttrs ? $this->extAttrs->toMap() : null;
        }
        if (null !== $this->extAttrsString) {
            $res['ExtAttrsString'] = $this->extAttrsString;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->fromId) {
            $res['FromId'] = $this->fromId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->parentTouchId) {
            $res['ParentTouchId'] = $this->parentTouchId;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->switchUser) {
            $res['SwitchUser'] = $this->switchUser;
        }
        if (null !== $this->toId) {
            $res['ToId'] = $this->toId;
        }
        if (null !== $this->touchContent) {
            $res['TouchContent'] = $this->touchContent;
        }
        if (null !== $this->touchEndReason) {
            $res['TouchEndReason'] = $this->touchEndReason;
        }
        if (null !== $this->touchId) {
            $res['TouchId'] = $this->touchId;
        }
        if (null !== $this->touchTime) {
            $res['TouchTime'] = $this->touchTime;
        }
        if (null !== $this->touchType) {
            $res['TouchType'] = $this->touchType;
        }
        if (null !== $this->userTouchId) {
            $res['UserTouchId'] = $this->userTouchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['CloseTime'])) {
            $model->closeTime = $map['CloseTime'];
        }
        if (isset($map['CommonQueueName'])) {
            $model->commonQueueName = $map['CommonQueueName'];
        }
        if (isset($map['DepId'])) {
            $model->depId = $map['DepId'];
        }
        if (isset($map['ExtAttrs'])) {
            $model->extAttrs = extAttrs::fromMap($map['ExtAttrs']);
        }
        if (isset($map['ExtAttrsString'])) {
            $model->extAttrsString = $map['ExtAttrsString'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['FromId'])) {
            $model->fromId = $map['FromId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['ParentTouchId'])) {
            $model->parentTouchId = $map['ParentTouchId'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SwitchUser'])) {
            $model->switchUser = $map['SwitchUser'];
        }
        if (isset($map['ToId'])) {
            $model->toId = $map['ToId'];
        }
        if (isset($map['TouchContent'])) {
            $model->touchContent = $map['TouchContent'];
        }
        if (isset($map['TouchEndReason'])) {
            $model->touchEndReason = $map['TouchEndReason'];
        }
        if (isset($map['TouchId'])) {
            $model->touchId = $map['TouchId'];
        }
        if (isset($map['TouchTime'])) {
            $model->touchTime = $map['TouchTime'];
        }
        if (isset($map['TouchType'])) {
            $model->touchType = $map['TouchType'];
        }
        if (isset($map['UserTouchId'])) {
            $model->userTouchId = $map['UserTouchId'];
        }

        return $model;
    }
}
