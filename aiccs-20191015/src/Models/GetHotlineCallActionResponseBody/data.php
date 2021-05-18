<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineCallActionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $touchId;

    /**
     * @var int
     */
    public $depId;

    /**
     * @var string
     */
    public $memberName;

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
    public $actionId;

    /**
     * @var string
     */
    public $calloutName;

    /**
     * @var int
     */
    public $subTouchId;

    /**
     * @var int
     */
    public $servicerId;

    /**
     * @var int
     */
    public $buId;

    /**
     * @var int
     */
    public $calloutId;

    /**
     * @var int
     */
    public $caseId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $isTransfer;

    /**
     * @var int
     */
    public $memberId;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $memberList;
    protected $_name = [
        'touchId'      => 'TouchId',
        'depId'        => 'DepId',
        'memberName'   => 'MemberName',
        'servicerName' => 'ServicerName',
        'channelType'  => 'ChannelType',
        'actionId'     => 'ActionId',
        'calloutName'  => 'CalloutName',
        'subTouchId'   => 'SubTouchId',
        'servicerId'   => 'ServicerId',
        'buId'         => 'BuId',
        'calloutId'    => 'CalloutId',
        'caseId'       => 'CaseId',
        'channelId'    => 'ChannelId',
        'isTransfer'   => 'IsTransfer',
        'memberId'     => 'MemberId',
        'taskId'       => 'TaskId',
        'memberList'   => 'MemberList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->touchId) {
            $res['TouchId'] = $this->touchId;
        }
        if (null !== $this->depId) {
            $res['DepId'] = $this->depId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }
        if (null !== $this->calloutName) {
            $res['CalloutName'] = $this->calloutName;
        }
        if (null !== $this->subTouchId) {
            $res['SubTouchId'] = $this->subTouchId;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }
        if (null !== $this->calloutId) {
            $res['CalloutId'] = $this->calloutId;
        }
        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->isTransfer) {
            $res['IsTransfer'] = $this->isTransfer;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->memberList) {
            $res['MemberList'] = $this->memberList;
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
        if (isset($map['TouchId'])) {
            $model->touchId = $map['TouchId'];
        }
        if (isset($map['DepId'])) {
            $model->depId = $map['DepId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }
        if (isset($map['CalloutName'])) {
            $model->calloutName = $map['CalloutName'];
        }
        if (isset($map['SubTouchId'])) {
            $model->subTouchId = $map['SubTouchId'];
        }
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }
        if (isset($map['CalloutId'])) {
            $model->calloutId = $map['CalloutId'];
        }
        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['IsTransfer'])) {
            $model->isTransfer = $map['IsTransfer'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['MemberList'])) {
            $model->memberList = $map['MemberList'];
        }

        return $model;
    }
}
