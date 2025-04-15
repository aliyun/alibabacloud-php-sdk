<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData\data\extAttrs;

class data extends Model
{
    /**
     * @var int
     */
    public $buId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $channelType;

    /**
     * @var int
     */
    public $closeTime;

    /**
     * @var string
     */
    public $commonQueueName;

    /**
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
     * @var string
     */
    public $feedback;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var int
     */
    public $fromId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var int
     */
    public $parentTouchId;

    /**
     * @var int
     */
    public $queueId;

    /**
     * @var int
     */
    public $servicerId;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $switchUser;

    /**
     * @var int
     */
    public $toId;

    /**
     * @var string
     */
    public $touchContent;

    /**
     * @var int
     */
    public $touchEndReason;

    /**
     * @var string
     */
    public $touchId;

    /**
     * @var string
     */
    public $touchTime;

    /**
     * @var int
     */
    public $touchType;

    /**
     * @var int
     */
    public $userTouchId;
    protected $_name = [
        'buId' => 'BuId',
        'channelId' => 'ChannelId',
        'channelType' => 'ChannelType',
        'closeTime' => 'CloseTime',
        'commonQueueName' => 'CommonQueueName',
        'depId' => 'DepId',
        'extAttrs' => 'ExtAttrs',
        'extAttrsString' => 'ExtAttrsString',
        'feedback' => 'Feedback',
        'firstTime' => 'FirstTime',
        'fromId' => 'FromId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'memberId' => 'MemberId',
        'memberName' => 'MemberName',
        'parentTouchId' => 'ParentTouchId',
        'queueId' => 'QueueId',
        'servicerId' => 'ServicerId',
        'servicerName' => 'ServicerName',
        'status' => 'Status',
        'switchUser' => 'SwitchUser',
        'toId' => 'ToId',
        'touchContent' => 'TouchContent',
        'touchEndReason' => 'TouchEndReason',
        'touchId' => 'TouchId',
        'touchTime' => 'TouchTime',
        'touchType' => 'TouchType',
        'userTouchId' => 'UserTouchId',
    ];

    public function validate()
    {
        if (null !== $this->extAttrs) {
            $this->extAttrs->validate();
        }
        if (\is_array($this->extAttrsString)) {
            Model::validateArray($this->extAttrsString);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ExtAttrs'] = null !== $this->extAttrs ? $this->extAttrs->toArray($noStream) : $this->extAttrs;
        }

        if (null !== $this->extAttrsString) {
            if (\is_array($this->extAttrsString)) {
                $res['ExtAttrsString'] = [];
                foreach ($this->extAttrsString as $key1 => $value1) {
                    $res['ExtAttrsString'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['ExtAttrsString'])) {
                $model->extAttrsString = [];
                foreach ($map['ExtAttrsString'] as $key1 => $value1) {
                    $model->extAttrsString[$key1] = $value1;
                }
            }
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
