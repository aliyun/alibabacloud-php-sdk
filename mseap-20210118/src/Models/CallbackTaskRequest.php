<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Dara\Model;

class CallbackTaskRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunKp;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $originalRequest;

    /**
     * @var string
     */
    public $outTaskId;

    /**
     * @var string
     */
    public $principalKey;

    /**
     * @var string
     */
    public $taskData;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @var string
     */
    public $userBid;

    /**
     * @var int
     */
    public $userCallerParentId;

    /**
     * @var bool
     */
    public $userCallerSecurityTransport;

    /**
     * @var string
     */
    public $userCallerType;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $userKp;

    /**
     * @var bool
     */
    public $userMfaPresent;

    /**
     * @var string
     */
    public $userSecurityToken;
    protected $_name = [
        'aliyunKp' => 'AliyunKp',
        'apiType' => 'ApiType',
        'bid' => 'Bid',
        'bizCode' => 'BizCode',
        'lang' => 'Lang',
        'orderId' => 'OrderId',
        'originalRequest' => 'OriginalRequest',
        'outTaskId' => 'OutTaskId',
        'principalKey' => 'PrincipalKey',
        'taskData' => 'TaskData',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
        'userAccessKeyId' => 'UserAccessKeyId',
        'userBid' => 'UserBid',
        'userCallerParentId' => 'UserCallerParentId',
        'userCallerSecurityTransport' => 'UserCallerSecurityTransport',
        'userCallerType' => 'UserCallerType',
        'userClientIp' => 'UserClientIp',
        'userKp' => 'UserKp',
        'userMfaPresent' => 'UserMfaPresent',
        'userSecurityToken' => 'UserSecurityToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunKp) {
            $res['AliyunKp'] = $this->aliyunKp;
        }

        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }

        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }

        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->originalRequest) {
            $res['OriginalRequest'] = $this->originalRequest;
        }

        if (null !== $this->outTaskId) {
            $res['OutTaskId'] = $this->outTaskId;
        }

        if (null !== $this->principalKey) {
            $res['PrincipalKey'] = $this->principalKey;
        }

        if (null !== $this->taskData) {
            $res['TaskData'] = $this->taskData;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->userAccessKeyId) {
            $res['UserAccessKeyId'] = $this->userAccessKeyId;
        }

        if (null !== $this->userBid) {
            $res['UserBid'] = $this->userBid;
        }

        if (null !== $this->userCallerParentId) {
            $res['UserCallerParentId'] = $this->userCallerParentId;
        }

        if (null !== $this->userCallerSecurityTransport) {
            $res['UserCallerSecurityTransport'] = $this->userCallerSecurityTransport;
        }

        if (null !== $this->userCallerType) {
            $res['UserCallerType'] = $this->userCallerType;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        if (null !== $this->userKp) {
            $res['UserKp'] = $this->userKp;
        }

        if (null !== $this->userMfaPresent) {
            $res['UserMfaPresent'] = $this->userMfaPresent;
        }

        if (null !== $this->userSecurityToken) {
            $res['UserSecurityToken'] = $this->userSecurityToken;
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
        if (isset($map['AliyunKp'])) {
            $model->aliyunKp = $map['AliyunKp'];
        }

        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }

        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }

        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OriginalRequest'])) {
            $model->originalRequest = $map['OriginalRequest'];
        }

        if (isset($map['OutTaskId'])) {
            $model->outTaskId = $map['OutTaskId'];
        }

        if (isset($map['PrincipalKey'])) {
            $model->principalKey = $map['PrincipalKey'];
        }

        if (isset($map['TaskData'])) {
            $model->taskData = $map['TaskData'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }

        if (isset($map['UserBid'])) {
            $model->userBid = $map['UserBid'];
        }

        if (isset($map['UserCallerParentId'])) {
            $model->userCallerParentId = $map['UserCallerParentId'];
        }

        if (isset($map['UserCallerSecurityTransport'])) {
            $model->userCallerSecurityTransport = $map['UserCallerSecurityTransport'];
        }

        if (isset($map['UserCallerType'])) {
            $model->userCallerType = $map['UserCallerType'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        if (isset($map['UserKp'])) {
            $model->userKp = $map['UserKp'];
        }

        if (isset($map['UserMfaPresent'])) {
            $model->userMfaPresent = $map['UserMfaPresent'];
        }

        if (isset($map['UserSecurityToken'])) {
            $model->userSecurityToken = $map['UserSecurityToken'];
        }

        return $model;
    }
}
