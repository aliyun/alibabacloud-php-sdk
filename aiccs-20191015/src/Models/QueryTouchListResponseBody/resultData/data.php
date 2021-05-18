<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData\data\extAttrs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $toId;

    /**
     * @var int
     */
    public $parentTouchId;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var int
     */
    public $channelType;

    /**
     * @var int
     */
    public $closeTime;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $servicerId;

    /**
     * @var string
     */
    public $switchUser;

    /**
     * @var int
     */
    public $buId;

    /**
     * @var int
     */
    public $fromId;

    /**
     * @var int
     */
    public $userTouchId;

    /**
     * @var string
     */
    public $touchTime;

    /**
     * @var string
     */
    public $touchContent;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $touchId;

    /**
     * @var int
     */
    public $queueId;

    /**
     * @var int
     */
    public $depId;

    /**
     * @var int
     */
    public $touchEndReason;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $commonQueueName;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var int
     */
    public $touchType;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $memberId;

    /**
     * @var extAttrs
     */
    public $extAttrs;
    protected $_name = [
        'status'          => 'Status',
        'toId'            => 'ToId',
        'parentTouchId'   => 'ParentTouchId',
        'servicerName'    => 'ServicerName',
        'channelType'     => 'ChannelType',
        'closeTime'       => 'CloseTime',
        'gmtModified'     => 'GmtModified',
        'servicerId'      => 'ServicerId',
        'switchUser'      => 'SwitchUser',
        'buId'            => 'BuId',
        'fromId'          => 'FromId',
        'userTouchId'     => 'UserTouchId',
        'touchTime'       => 'TouchTime',
        'touchContent'    => 'TouchContent',
        'feedback'        => 'Feedback',
        'touchId'         => 'TouchId',
        'queueId'         => 'QueueId',
        'depId'           => 'DepId',
        'touchEndReason'  => 'TouchEndReason',
        'memberName'      => 'MemberName',
        'commonQueueName' => 'CommonQueueName',
        'firstTime'       => 'FirstTime',
        'touchType'       => 'TouchType',
        'channelId'       => 'ChannelId',
        'gmtCreate'       => 'GmtCreate',
        'memberId'        => 'MemberId',
        'extAttrs'        => 'ExtAttrs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->toId) {
            $res['ToId'] = $this->toId;
        }
        if (null !== $this->parentTouchId) {
            $res['ParentTouchId'] = $this->parentTouchId;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->closeTime) {
            $res['CloseTime'] = $this->closeTime;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->switchUser) {
            $res['SwitchUser'] = $this->switchUser;
        }
        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }
        if (null !== $this->fromId) {
            $res['FromId'] = $this->fromId;
        }
        if (null !== $this->userTouchId) {
            $res['UserTouchId'] = $this->userTouchId;
        }
        if (null !== $this->touchTime) {
            $res['TouchTime'] = $this->touchTime;
        }
        if (null !== $this->touchContent) {
            $res['TouchContent'] = $this->touchContent;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->touchId) {
            $res['TouchId'] = $this->touchId;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }
        if (null !== $this->depId) {
            $res['DepId'] = $this->depId;
        }
        if (null !== $this->touchEndReason) {
            $res['TouchEndReason'] = $this->touchEndReason;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->commonQueueName) {
            $res['CommonQueueName'] = $this->commonQueueName;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->touchType) {
            $res['TouchType'] = $this->touchType;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->extAttrs) {
            $res['ExtAttrs'] = null !== $this->extAttrs ? $this->extAttrs->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ToId'])) {
            $model->toId = $map['ToId'];
        }
        if (isset($map['ParentTouchId'])) {
            $model->parentTouchId = $map['ParentTouchId'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['CloseTime'])) {
            $model->closeTime = $map['CloseTime'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['SwitchUser'])) {
            $model->switchUser = $map['SwitchUser'];
        }
        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }
        if (isset($map['FromId'])) {
            $model->fromId = $map['FromId'];
        }
        if (isset($map['UserTouchId'])) {
            $model->userTouchId = $map['UserTouchId'];
        }
        if (isset($map['TouchTime'])) {
            $model->touchTime = $map['TouchTime'];
        }
        if (isset($map['TouchContent'])) {
            $model->touchContent = $map['TouchContent'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['TouchId'])) {
            $model->touchId = $map['TouchId'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }
        if (isset($map['DepId'])) {
            $model->depId = $map['DepId'];
        }
        if (isset($map['TouchEndReason'])) {
            $model->touchEndReason = $map['TouchEndReason'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['CommonQueueName'])) {
            $model->commonQueueName = $map['CommonQueueName'];
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['TouchType'])) {
            $model->touchType = $map['TouchType'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['ExtAttrs'])) {
            $model->extAttrs = extAttrs::fromMap($map['ExtAttrs']);
        }

        return $model;
    }
}
