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
    public $regionId;

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
    protected $_name = [
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'description' => 'Description',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'linkName' => 'LinkName',
        'regionId' => 'RegionId',
        'sourceDir' => 'SourceDir',
        'sourceType' => 'SourceType',
        'syncIntervalMinutes' => 'SyncIntervalMinutes',
        'tenantId' => 'TenantId',
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
