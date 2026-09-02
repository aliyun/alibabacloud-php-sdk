<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class SubmitBatchChangeTableOwnerRequest extends Model
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
     * @var string[]
     */
    public $tableMetaEntityIds;
    protected $_name = [
        'enableCrossTenant' => 'EnableCrossTenant',
        'owner' => 'Owner',
        'tableMetaEntityIds' => 'TableMetaEntityIds',
    ];

    public function validate()
    {
        if (\is_array($this->tableMetaEntityIds)) {
            Model::validateArray($this->tableMetaEntityIds);
        }
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

        if (null !== $this->tableMetaEntityIds) {
            if (\is_array($this->tableMetaEntityIds)) {
                $res['TableMetaEntityIds'] = [];
                $n1 = 0;
                foreach ($this->tableMetaEntityIds as $item1) {
                    $res['TableMetaEntityIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['TableMetaEntityIds'])) {
                $model->tableMetaEntityIds = [];
                $n1 = 0;
                foreach ($map['TableMetaEntityIds'] as $item1) {
                    $model->tableMetaEntityIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
