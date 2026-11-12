<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CmsV1MigrationCandidate extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var string
     */
    public $observeGroupId;

    /**
     * @var string
     */
    public $originGroupId;

    /**
     * @var string
     */
    public $rejectionReason;

    /**
     * @var bool
     */
    public $selectable;

    /**
     * @var bool
     */
    public $sourceReadOnly;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $targetGroupName;
    protected $_name = [
        'groupName' => 'groupName',
        'migrationStatus' => 'migrationStatus',
        'observeGroupId' => 'observeGroupId',
        'originGroupId' => 'originGroupId',
        'rejectionReason' => 'rejectionReason',
        'selectable' => 'selectable',
        'sourceReadOnly' => 'sourceReadOnly',
        'sourceType' => 'sourceType',
        'targetGroupName' => 'targetGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->migrationStatus) {
            $res['migrationStatus'] = $this->migrationStatus;
        }

        if (null !== $this->observeGroupId) {
            $res['observeGroupId'] = $this->observeGroupId;
        }

        if (null !== $this->originGroupId) {
            $res['originGroupId'] = $this->originGroupId;
        }

        if (null !== $this->rejectionReason) {
            $res['rejectionReason'] = $this->rejectionReason;
        }

        if (null !== $this->selectable) {
            $res['selectable'] = $this->selectable;
        }

        if (null !== $this->sourceReadOnly) {
            $res['sourceReadOnly'] = $this->sourceReadOnly;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->targetGroupName) {
            $res['targetGroupName'] = $this->targetGroupName;
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
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['migrationStatus'])) {
            $model->migrationStatus = $map['migrationStatus'];
        }

        if (isset($map['observeGroupId'])) {
            $model->observeGroupId = $map['observeGroupId'];
        }

        if (isset($map['originGroupId'])) {
            $model->originGroupId = $map['originGroupId'];
        }

        if (isset($map['rejectionReason'])) {
            $model->rejectionReason = $map['rejectionReason'];
        }

        if (isset($map['selectable'])) {
            $model->selectable = $map['selectable'];
        }

        if (isset($map['sourceReadOnly'])) {
            $model->sourceReadOnly = $map['sourceReadOnly'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['targetGroupName'])) {
            $model->targetGroupName = $map['targetGroupName'];
        }

        return $model;
    }
}
