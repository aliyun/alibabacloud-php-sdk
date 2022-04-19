<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\ListDSEntityResponseBody\data;

use AlibabaCloud\Tea\Model;

class entities extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $callerBid;

    /**
     * @var string
     */
    public $callerBidLoginEmail;

    /**
     * @var int
     */
    public $callerUid;

    /**
     * @var string
     */
    public $callerUidLoginEmail;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $clientIP;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @description 实体ID
     *
     * @var int
     */
    public $entityId;

    /**
     * @description 实体名称，仅支持中文、大小写字母、数字、下划线
     *
     * @var string
     */
    public $entityName;

    /**
     * @description 实体类型：详见:,EntityTypeEnum[synonyms(同义词),regex(正则)]
     *
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerIdLoginEmail;

    /**
     * @var string
     */
    public $proxyId;

    /**
     * @var string
     */
    public $requestContent;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $token;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'action'               => 'Action',
        'appKey'               => 'AppKey',
        'callerBid'            => 'CallerBid',
        'callerBidLoginEmail'  => 'CallerBidLoginEmail',
        'callerUid'            => 'CallerUid',
        'callerUidLoginEmail'  => 'CallerUidLoginEmail',
        'channel'              => 'Channel',
        'clientIP'             => 'ClientIP',
        'createTime'           => 'CreateTime',
        'createUserId'         => 'CreateUserId',
        'createUserName'       => 'CreateUserName',
        'enable'               => 'Enable',
        'entityId'             => 'EntityId',
        'entityName'           => 'EntityName',
        'entityType'           => 'EntityType',
        'modifyTime'           => 'ModifyTime',
        'modifyUserId'         => 'ModifyUserId',
        'modifyUserName'       => 'ModifyUserName',
        'operator'             => 'Operator',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'ownerIdLoginEmail'    => 'OwnerIdLoginEmail',
        'proxyId'              => 'ProxyId',
        'requestContent'       => 'RequestContent',
        'requestId'            => 'RequestId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tenantId'             => 'TenantId',
        'token'                => 'Token',
        'userId'               => 'UserId',
        'userNick'             => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->callerBid) {
            $res['CallerBid'] = $this->callerBid;
        }
        if (null !== $this->callerBidLoginEmail) {
            $res['CallerBidLoginEmail'] = $this->callerBidLoginEmail;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->callerUidLoginEmail) {
            $res['CallerUidLoginEmail'] = $this->callerUidLoginEmail;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerIdLoginEmail) {
            $res['OwnerIdLoginEmail'] = $this->ownerIdLoginEmail;
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->requestContent) {
            $res['RequestContent'] = $this->requestContent;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['CallerBid'])) {
            $model->callerBid = $map['CallerBid'];
        }
        if (isset($map['CallerBidLoginEmail'])) {
            $model->callerBidLoginEmail = $map['CallerBidLoginEmail'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['CallerUidLoginEmail'])) {
            $model->callerUidLoginEmail = $map['CallerUidLoginEmail'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerIdLoginEmail'])) {
            $model->ownerIdLoginEmail = $map['OwnerIdLoginEmail'];
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['RequestContent'])) {
            $model->requestContent = $map['RequestContent'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
