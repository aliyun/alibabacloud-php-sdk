<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class PushRpaTaskRequest extends Model
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
     * @example public
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
     * @description lang
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description modelId
     *
     * @example 1951
     *
     * @var int
     */
    public $modelId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description originalRequest
     *
     * @example 1
     *
     * @var string
     */
    public $originalRequest;

    /**
     * @description request
     *
     * @example {}
     *
     * @var string
     */
    public $request;

    /**
     * @description status
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description taskId
     *
     * @example 833812
     *
     * @var int
     */
    public $taskId;

    /**
     * @description templateId
     *
     * @example 26
     *
     * @var int
     */
    public $templateId;

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
        'lang' => 'Lang',
        'modelId' => 'ModelId',
        'name' => 'Name',
        'originalRequest' => 'OriginalRequest',
        'request' => 'Request',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'templateId' => 'TemplateId',
        'userAccessKeyId' => 'UserAccessKeyId',
        'userBid' => 'UserBid',
        'userCallerParentId' => 'UserCallerParentId',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->originalRequest) {
            $res['OriginalRequest'] = $this->originalRequest;
        }
        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
     * @return PushRpaTaskRequest
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OriginalRequest'])) {
            $model->originalRequest = $map['OriginalRequest'];
        }
        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
