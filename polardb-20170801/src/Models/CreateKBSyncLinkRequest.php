<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateKBSyncLinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $linkName;

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
    public $sheetMcpEndpoint;

    /**
     * @var string
     */
    public $sourceDir;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var int
     */
    public $syncIntervalMinutes;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'description' => 'Description',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'linkName' => 'LinkName',
        'mcpEndpoint' => 'McpEndpoint',
        'regionId' => 'RegionId',
        'sheetMcpEndpoint' => 'SheetMcpEndpoint',
        'sourceDir' => 'SourceDir',
        'sourceType' => 'SourceType',
        'syncIntervalMinutes' => 'SyncIntervalMinutes',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->linkName) {
            $res['LinkName'] = $this->linkName;
        }

        if (null !== $this->mcpEndpoint) {
            $res['McpEndpoint'] = $this->mcpEndpoint;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sheetMcpEndpoint) {
            $res['SheetMcpEndpoint'] = $this->sheetMcpEndpoint;
        }

        if (null !== $this->sourceDir) {
            $res['SourceDir'] = $this->sourceDir;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->syncIntervalMinutes) {
            $res['SyncIntervalMinutes'] = $this->syncIntervalMinutes;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['LinkName'])) {
            $model->linkName = $map['LinkName'];
        }

        if (isset($map['McpEndpoint'])) {
            $model->mcpEndpoint = $map['McpEndpoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SheetMcpEndpoint'])) {
            $model->sheetMcpEndpoint = $map['SheetMcpEndpoint'];
        }

        if (isset($map['SourceDir'])) {
            $model->sourceDir = $map['SourceDir'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SyncIntervalMinutes'])) {
            $model->syncIntervalMinutes = $map['SyncIntervalMinutes'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
