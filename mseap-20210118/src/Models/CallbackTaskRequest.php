<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class CallbackTaskRequest extends Model
{
    /**
     * @description aliyunKp
     *
     * @example 1
     *
     * @var string
     */
    public $aliyunKp;

    /**
     * @description apiType
     *
     * @example MPC
     *
     * @var string
     */
    public $apiType;

    /**
     * @description bid
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @description lang
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description orderId
     *
     * @example 1672369049358
     *
     * @var string
     */
    public $orderId;

    /**
     * @description originalRequest
     *
     * @example 1
     *
     * @var string
     */
    public $originalRequest;

    /**
     * @description outTaskId
     *
     * @example 1
     *
     * @var string
     */
    public $outTaskId;

    /**
     * @var string
     */
    public $principalKey;

    /**
     * @description taskData
     *
     * @example {\\"result\\":\\"SUCCESS\\",\\"message\\":\\"null\\",\\"taskId\\":\\"8cbc97d8-9b2b-4c2f-862f-983ea5dbedc2\\"}
     *
     * @var string
     */
    public $taskData;

    /**
     * @description taskId
     *
     * @example 2559492
     *
     * @var string
     */
    public $taskId;

    /**
     * @description taskType
     *
     * @example PATENT_QUERY
     *
     * @var string
     */
    public $taskType;

    /**
     * @description userAccessKeyId
     *
     * @example 1
     *
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @description userBid
     *
     * @example 1
     *
     * @var string
     */
    public $userBid;

    /**
     * @description userCallerParentId
     *
     * @example 1
     *
     * @var int
     */
    public $userCallerParentId;

    /**
     * @description userCallerSecurityTransport
     *
     * @example 1
     *
     * @var bool
     */
    public $userCallerSecurityTransport;

    /**
     * @description userCallerType
     *
     * @example 1
     *
     * @var string
     */
    public $userCallerType;

    /**
     * @description userClientIp
     *
     * @example 1
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description userKp
     *
     * @example 1
     *
     * @var string
     */
    public $userKp;

    /**
     * @description userMfaPresent
     *
     * @example 1
     *
     * @var bool
     */
    public $userMfaPresent;

    /**
     * @description userSecurityToken
     *
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CallbackTaskRequest
     */
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
