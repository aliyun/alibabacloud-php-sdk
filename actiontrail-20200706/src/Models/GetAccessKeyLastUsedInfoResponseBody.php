<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class GetAccessKeyLastUsedInfoResponseBody extends Model
{
    /**
     * @description The AccessKey ID.
     *
     * @example LTAI4Fz1ykT4qxgNMvN6****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 104758519118****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The type of the account to which the AccessKey pair belongs.
     *
     * @example ram-user
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The details about the event.
     *
     * @example {
     * "eventId": "239EB588-CD24-522E-B0B5-174A1A58****",
     * "eventSource": "ecs.cn-hangzhou.aliyuncs.com",
     * "sourceIpAddress": "10.10.**.**",
     * "userIdentity": {
     * "accountId": "104758519118****",
     * "principalId": "24549429003625****",
     * }
     * @var string
     */
    public $detail;

    /**
     * @description The ID of the account to which the AccessKey pair belongs.
     *
     * @example 24549429003625****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The ID of the request.
     *
     * @example 239EB588-CD24-522E-B0B5-174A1A588BE0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The Alibaba Cloud service that was last accessed.
     *
     * @example Ecs
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The Chinese name of the Alibaba Cloud service that was last accessed.
     *
     * @example Elastic Compute Service (ECS)
     *
     * @var string
     */
    public $serviceNameCn;

    /**
     * @description The English name of the Alibaba Cloud service that was last accessed.
     *
     * @example Elastic Compute Service
     *
     * @var string
     */
    public $serviceNameEn;

    /**
     * @description The event source.
     *
     * @example ManagementEvent
     *
     * @var string
     */
    public $source;

    /**
     * @description The timestamp when the AccessKey pair was last called.
     *
     * @example 1657247532000
     *
     * @var int
     */
    public $usedTimestamp;

    /**
     * @description The name of the account to which the AccessKey pair belongs.
     *
     * If the value of the AccountType parameter is root-account, the value of the UserName parameter is root. If the value of the AccountType parameter is ram-user, the value of the UserName parameter is the name of a RAM user.
     * @example alice
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'accountId'     => 'AccountId',
        'accountType'   => 'AccountType',
        'detail'        => 'Detail',
        'ownerId'       => 'OwnerId',
        'requestId'     => 'RequestId',
        'serviceName'   => 'ServiceName',
        'serviceNameCn' => 'ServiceNameCn',
        'serviceNameEn' => 'ServiceNameEn',
        'source'        => 'Source',
        'usedTimestamp' => 'UsedTimestamp',
        'userName'      => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceNameCn) {
            $res['ServiceNameCn'] = $this->serviceNameCn;
        }
        if (null !== $this->serviceNameEn) {
            $res['ServiceNameEn'] = $this->serviceNameEn;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->usedTimestamp) {
            $res['UsedTimestamp'] = $this->usedTimestamp;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyLastUsedInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceNameCn'])) {
            $model->serviceNameCn = $map['ServiceNameCn'];
        }
        if (isset($map['ServiceNameEn'])) {
            $model->serviceNameEn = $map['ServiceNameEn'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UsedTimestamp'])) {
            $model->usedTimestamp = $map['UsedTimestamp'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
