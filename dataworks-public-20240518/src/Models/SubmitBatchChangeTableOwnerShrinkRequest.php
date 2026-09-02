<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class SubmitBatchChangeTableOwnerShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $enableCrossTenant;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $tableMetaEntityIdsShrink;
    protected $_name = [
        'enableCrossTenant' => 'EnableCrossTenant',
        'owner' => 'Owner',
        'tableMetaEntityIdsShrink' => 'TableMetaEntityIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableCrossTenant) {
            $res['EnableCrossTenant'] = $this->enableCrossTenant;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->tableMetaEntityIdsShrink) {
            $res['TableMetaEntityIds'] = $this->tableMetaEntityIdsShrink;
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
        if (isset($map['EnableCrossTenant'])) {
            $model->enableCrossTenant = $map['EnableCrossTenant'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['TableMetaEntityIds'])) {
            $model->tableMetaEntityIdsShrink = $map['TableMetaEntityIds'];
        }

        return $model;
    }
}
