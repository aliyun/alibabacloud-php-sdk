<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class QuerySourceUsageSummaryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $knowledgeBaseIdsShrink;

    /**
     * @var string
     */
    public $opsUserCode;

    /**
     * @var string
     */
    public $opsUserId;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string
     */
    public $sourceIdsShrink;

    /**
     * @var string
     */
    public $sourceName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'appToken' => 'appToken',
        'collaborationGroupId' => 'collaborationGroupId',
        'endTime' => 'endTime',
        'eventType' => 'eventType',
        'knowledgeBaseIdsShrink' => 'knowledgeBaseIds',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'scopeType' => 'scopeType',
        'sourceIdsShrink' => 'sourceIds',
        'sourceName' => 'sourceName',
        'startTime' => 'startTime',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appToken) {
            $res['appToken'] = $this->appToken;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }

        if (null !== $this->knowledgeBaseIdsShrink) {
            $res['knowledgeBaseIds'] = $this->knowledgeBaseIdsShrink;
        }

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->scopeType) {
            $res['scopeType'] = $this->scopeType;
        }

        if (null !== $this->sourceIdsShrink) {
            $res['sourceIds'] = $this->sourceIdsShrink;
        }

        if (null !== $this->sourceName) {
            $res['sourceName'] = $this->sourceName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['appToken'])) {
            $model->appToken = $map['appToken'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }

        if (isset($map['knowledgeBaseIds'])) {
            $model->knowledgeBaseIdsShrink = $map['knowledgeBaseIds'];
        }

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['scopeType'])) {
            $model->scopeType = $map['scopeType'];
        }

        if (isset($map['sourceIds'])) {
            $model->sourceIdsShrink = $map['sourceIds'];
        }

        if (isset($map['sourceName'])) {
            $model->sourceName = $map['sourceName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
