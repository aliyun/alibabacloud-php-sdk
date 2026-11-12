<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CmsV1MigrationPreview extends Model
{
    /**
     * @var CmsV1MigrationCheck[]
     */
    public $checks;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $migratable;

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
    public $reason;

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
        'checks' => 'checks',
        'groupName' => 'groupName',
        'migratable' => 'migratable',
        'observeGroupId' => 'observeGroupId',
        'originGroupId' => 'originGroupId',
        'reason' => 'reason',
        'sourceReadOnly' => 'sourceReadOnly',
        'sourceType' => 'sourceType',
        'targetGroupName' => 'targetGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->checks)) {
            Model::validateArray($this->checks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checks) {
            if (\is_array($this->checks)) {
                $res['checks'] = [];
                $n1 = 0;
                foreach ($this->checks as $item1) {
                    $res['checks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->migratable) {
            $res['migratable'] = $this->migratable;
        }

        if (null !== $this->observeGroupId) {
            $res['observeGroupId'] = $this->observeGroupId;
        }

        if (null !== $this->originGroupId) {
            $res['originGroupId'] = $this->originGroupId;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
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
        if (isset($map['checks'])) {
            if (!empty($map['checks'])) {
                $model->checks = [];
                $n1 = 0;
                foreach ($map['checks'] as $item1) {
                    $model->checks[$n1] = CmsV1MigrationCheck::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['migratable'])) {
            $model->migratable = $map['migratable'];
        }

        if (isset($map['observeGroupId'])) {
            $model->observeGroupId = $map['observeGroupId'];
        }

        if (isset($map['originGroupId'])) {
            $model->originGroupId = $map['originGroupId'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
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
