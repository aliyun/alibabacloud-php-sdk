<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class IdentifyCodeRequest extends Model
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
     * @example openAPI
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
     * @example {\\"engine\\": \\"MySQL\\", \\"instanceId\\": \\"rm-2zes07949gc0febg6\\", \\"userId\\": \\"1204765431532768\\", \\"previousExistConfig\\": False, \\"engineVersion\\": \\"8.0\\", \\"autoResourceOptimize\\": 0, \\"dasProOn\\": False}
     *
     * @var string
     */
    public $data;

    /**
     * @example 1551278
     *
     * @var string
     */
    public $label;

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
     * @example CBWP
     *
     * @var string
     */
    public $type;

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
     * @example true
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
     * @example true
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
        'data' => 'Data',
        'label' => 'Label',
        'lang' => 'Lang',
        'originalRequest' => 'OriginalRequest',
        'type' => 'Type',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->originalRequest) {
            $res['OriginalRequest'] = $this->originalRequest;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
     * @return IdentifyCodeRequest
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OriginalRequest'])) {
            $model->originalRequest = $map['OriginalRequest'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
