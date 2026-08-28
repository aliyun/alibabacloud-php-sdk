<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\PrecheckSkillUploadViaOssResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $editingVersion;

    /**
     * @var string
     */
    public $entryPath;

    /**
     * @var bool
     */
    public $exists;

    /**
     * @var string
     */
    public $maxPublishedVersion;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $parsedVersion;

    /**
     * @var string
     */
    public $precheckCode;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $reviewingVersion;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $targetVersion;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'editingVersion' => 'editingVersion',
        'entryPath' => 'entryPath',
        'exists' => 'exists',
        'maxPublishedVersion' => 'maxPublishedVersion',
        'owner' => 'owner',
        'parsedVersion' => 'parsedVersion',
        'precheckCode' => 'precheckCode',
        'reason' => 'reason',
        'reviewingVersion' => 'reviewingVersion',
        'skillName' => 'skillName',
        'targetVersion' => 'targetVersion',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editingVersion) {
            $res['editingVersion'] = $this->editingVersion;
        }

        if (null !== $this->entryPath) {
            $res['entryPath'] = $this->entryPath;
        }

        if (null !== $this->exists) {
            $res['exists'] = $this->exists;
        }

        if (null !== $this->maxPublishedVersion) {
            $res['maxPublishedVersion'] = $this->maxPublishedVersion;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->parsedVersion) {
            $res['parsedVersion'] = $this->parsedVersion;
        }

        if (null !== $this->precheckCode) {
            $res['precheckCode'] = $this->precheckCode;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        if (null !== $this->reviewingVersion) {
            $res['reviewingVersion'] = $this->reviewingVersion;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
        }

        if (null !== $this->targetVersion) {
            $res['targetVersion'] = $this->targetVersion;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['editingVersion'])) {
            $model->editingVersion = $map['editingVersion'];
        }

        if (isset($map['entryPath'])) {
            $model->entryPath = $map['entryPath'];
        }

        if (isset($map['exists'])) {
            $model->exists = $map['exists'];
        }

        if (isset($map['maxPublishedVersion'])) {
            $model->maxPublishedVersion = $map['maxPublishedVersion'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['parsedVersion'])) {
            $model->parsedVersion = $map['parsedVersion'];
        }

        if (isset($map['precheckCode'])) {
            $model->precheckCode = $map['precheckCode'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        if (isset($map['reviewingVersion'])) {
            $model->reviewingVersion = $map['reviewingVersion'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        if (isset($map['targetVersion'])) {
            $model->targetVersion = $map['targetVersion'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
