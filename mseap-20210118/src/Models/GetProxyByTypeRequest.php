<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Dara\Model;

class GetProxyByTypeRequest extends Model
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
    public $lang;

    /**
     * @var string
     */
    public $originalRequest;

    /**
     * @var int
     */
    public $type;

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
