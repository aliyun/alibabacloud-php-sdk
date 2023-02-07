<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineCallActionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 8999****
     *
     * @var int
     */
    public $actionId;

    /**
     * @example 2367****
     *
     * @var int
     */
    public $buId;

    /**
     * @example 1122****
     *
     * @var int
     */
    public $calloutId;

    /**
     * @var string
     */
    public $calloutName;

    /**
     * @example 1138902****
     *
     * @var int
     */
    public $caseId;

    /**
     * @example 2377****
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 2
     *
     * @var int
     */
    public $channelType;

    /**
     * @example 1223****
     *
     * @var int
     */
    public $depId;

    /**
     * @example true
     *
     * @var string
     */
    public $isTransfer;

    /**
     * @example 7856876****
     *
     * @var int
     */
    public $memberId;

    /**
     * @example 8900****
     *
     * @var string
     */
    public $memberList;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @example 1332****
     *
     * @var int
     */
    public $servicerId;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @example 3423****
     *
     * @var int
     */
    public $subTouchId;

    /**
     * @example 12345****
     *
     * @var int
     */
    public $taskId;

    /**
     * @example 2235****
     *
     * @var int
     */
    public $touchId;
    protected $_name = [
        'actionId'     => 'ActionId',
        'buId'         => 'BuId',
        'calloutId'    => 'CalloutId',
        'calloutName'  => 'CalloutName',
        'caseId'       => 'CaseId',
        'channelId'    => 'ChannelId',
        'channelType'  => 'ChannelType',
        'depId'        => 'DepId',
        'isTransfer'   => 'IsTransfer',
        'memberId'     => 'MemberId',
        'memberList'   => 'MemberList',
        'memberName'   => 'MemberName',
        'servicerId'   => 'ServicerId',
        'servicerName' => 'ServicerName',
        'subTouchId'   => 'SubTouchId',
        'taskId'       => 'TaskId',
        'touchId'      => 'TouchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }
        if (null !== $this->buId) {
            $res['BuId'] = $this->buId;
        }
        if (null !== $this->calloutId) {
            $res['CalloutId'] = $this->calloutId;
        }
        if (null !== $this->calloutName) {
            $res['CalloutName'] = $this->calloutName;
        }
        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->depId) {
            $res['DepId'] = $this->depId;
        }
        if (null !== $this->isTransfer) {
            $res['IsTransfer'] = $this->isTransfer;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberList) {
            $res['MemberList'] = $this->memberList;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->servicerId) {
            $res['ServicerId'] = $this->servicerId;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->subTouchId) {
            $res['SubTouchId'] = $this->subTouchId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->touchId) {
            $res['TouchId'] = $this->touchId;
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
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }
        if (isset($map['BuId'])) {
            $model->buId = $map['BuId'];
        }
        if (isset($map['CalloutId'])) {
            $model->calloutId = $map['CalloutId'];
        }
        if (isset($map['CalloutName'])) {
            $model->calloutName = $map['CalloutName'];
        }
        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['DepId'])) {
            $model->depId = $map['DepId'];
        }
        if (isset($map['IsTransfer'])) {
            $model->isTransfer = $map['IsTransfer'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberList'])) {
            $model->memberList = $map['MemberList'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['ServicerId'])) {
            $model->servicerId = $map['ServicerId'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['SubTouchId'])) {
            $model->subTouchId = $map['SubTouchId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TouchId'])) {
            $model->touchId = $map['TouchId'];
        }

        return $model;
    }
}
