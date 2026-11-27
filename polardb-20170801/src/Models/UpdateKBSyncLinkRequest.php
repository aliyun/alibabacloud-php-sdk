<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdateKBSyncLinkRequest extends Model
{
    /**
     * @var string
     */
    public $aiTableMcpEndpoint;

    /**
     * @var int
     */
    public $chatMemberStaleTtlSeconds;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var int
     */
    public $feishuChatMemberStaleTtlSeconds;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $linkId;

    /**
     * @var string
     */
    public $mcpEndpoint;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $selectionMode;

    /**
     * @var string
     */
    public $selectionRules;

    /**
     * @var string
     */
    public $sheetMcpEndpoint;

    /**
     * @var bool
     */
    public $sourceDeleteSyncEnabled;

    /**
     * @var bool
     */
    public $syncEnabled;

    /**
     * @var int
     */
    public $syncIntervalMinutes;

    /**
     * @var string
     */
    public $userAccessToken;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userRefreshToken;
    protected $_name = [
        'aiTableMcpEndpoint' => 'AiTableMcpEndpoint',
        'chatMemberStaleTtlSeconds' => 'ChatMemberStaleTtlSeconds',
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'feishuChatMemberStaleTtlSeconds' => 'FeishuChatMemberStaleTtlSeconds',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'linkId' => 'LinkId',
        'mcpEndpoint' => 'McpEndpoint',
        'regionId' => 'RegionId',
        'selectionMode' => 'SelectionMode',
        'selectionRules' => 'SelectionRules',
        'sheetMcpEndpoint' => 'SheetMcpEndpoint',
        'sourceDeleteSyncEnabled' => 'SourceDeleteSyncEnabled',
        'syncEnabled' => 'SyncEnabled',
        'syncIntervalMinutes' => 'SyncIntervalMinutes',
        'userAccessToken' => 'UserAccessToken',
        'userId' => 'UserId',
        'userRefreshToken' => 'UserRefreshToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiTableMcpEndpoint) {
            $res['AiTableMcpEndpoint'] = $this->aiTableMcpEndpoint;
        }

        if (null !== $this->chatMemberStaleTtlSeconds) {
            $res['ChatMemberStaleTtlSeconds'] = $this->chatMemberStaleTtlSeconds;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
        }

        if (null !== $this->feishuChatMemberStaleTtlSeconds) {
            $res['FeishuChatMemberStaleTtlSeconds'] = $this->feishuChatMemberStaleTtlSeconds;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->linkId) {
            $res['LinkId'] = $this->linkId;
        }

        if (null !== $this->mcpEndpoint) {
            $res['McpEndpoint'] = $this->mcpEndpoint;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->selectionMode) {
            $res['SelectionMode'] = $this->selectionMode;
        }

        if (null !== $this->selectionRules) {
            $res['SelectionRules'] = $this->selectionRules;
        }

        if (null !== $this->sheetMcpEndpoint) {
            $res['SheetMcpEndpoint'] = $this->sheetMcpEndpoint;
        }

        if (null !== $this->sourceDeleteSyncEnabled) {
            $res['SourceDeleteSyncEnabled'] = $this->sourceDeleteSyncEnabled;
        }

        if (null !== $this->syncEnabled) {
            $res['SyncEnabled'] = $this->syncEnabled;
        }

        if (null !== $this->syncIntervalMinutes) {
            $res['SyncIntervalMinutes'] = $this->syncIntervalMinutes;
        }

        if (null !== $this->userAccessToken) {
            $res['UserAccessToken'] = $this->userAccessToken;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userRefreshToken) {
            $res['UserRefreshToken'] = $this->userRefreshToken;
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
        if (isset($map['AiTableMcpEndpoint'])) {
            $model->aiTableMcpEndpoint = $map['AiTableMcpEndpoint'];
        }

        if (isset($map['ChatMemberStaleTtlSeconds'])) {
            $model->chatMemberStaleTtlSeconds = $map['ChatMemberStaleTtlSeconds'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        if (isset($map['FeishuChatMemberStaleTtlSeconds'])) {
            $model->feishuChatMemberStaleTtlSeconds = $map['FeishuChatMemberStaleTtlSeconds'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['LinkId'])) {
            $model->linkId = $map['LinkId'];
        }

        if (isset($map['McpEndpoint'])) {
            $model->mcpEndpoint = $map['McpEndpoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SelectionMode'])) {
            $model->selectionMode = $map['SelectionMode'];
        }

        if (isset($map['SelectionRules'])) {
            $model->selectionRules = $map['SelectionRules'];
        }

        if (isset($map['SheetMcpEndpoint'])) {
            $model->sheetMcpEndpoint = $map['SheetMcpEndpoint'];
        }

        if (isset($map['SourceDeleteSyncEnabled'])) {
            $model->sourceDeleteSyncEnabled = $map['SourceDeleteSyncEnabled'];
        }

        if (isset($map['SyncEnabled'])) {
            $model->syncEnabled = $map['SyncEnabled'];
        }

        if (isset($map['SyncIntervalMinutes'])) {
            $model->syncIntervalMinutes = $map['SyncIntervalMinutes'];
        }

        if (isset($map['UserAccessToken'])) {
            $model->userAccessToken = $map['UserAccessToken'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserRefreshToken'])) {
            $model->userRefreshToken = $map['UserRefreshToken'];
        }

        return $model;
    }
}
