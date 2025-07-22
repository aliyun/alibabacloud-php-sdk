<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class SetRedisValueRequest extends Model
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
     * @example part_config_data
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
     * @example 1684967696495902
     *
     * @var string
     */
    public $key;

    /**
     * @description lang
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description originalRequest
     *
     * @example 1
     *
     * @var string
     */
    public $originalRequest;

    /**
     * @description requestId
     *
     * @example F864A883-AD76-53D5-9A24-A6DAD5177697
     *
     * @var string
     */
    public $requestId;

    /**
     * @description timeout
     *
     * @example 5000
     *
     * @var int
     */
    public $timeout;

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

    /**
     * @example 259200000
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'aliyunKp' => 'AliyunKp',
        'apiType' => 'ApiType',
        'bid' => 'Bid',
        'key' => 'Key',
        'lang' => 'Lang',
        'originalRequest' => 'OriginalRequest',
        'requestId' => 'RequestId',
        'timeout' => 'Timeout',
        'userAccessKeyId' => 'UserAccessKeyId',
        'userBid' => 'UserBid',
        'userCallerParentId' => 'UserCallerParentId',
        'userCallerType' => 'UserCallerType',
        'userClientIp' => 'UserClientIp',
        'userKp' => 'UserKp',
        'userMfaPresent' => 'UserMfaPresent',
        'userSecurityToken' => 'UserSecurityToken',
        'value' => 'Value',
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
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->originalRequest) {
            $res['OriginalRequest'] = $this->originalRequest;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRedisValueRequest
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OriginalRequest'])) {
            $model->originalRequest = $map['OriginalRequest'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
