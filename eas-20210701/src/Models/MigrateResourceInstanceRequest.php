<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class MigrateResourceInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $destResourceId;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var bool
     */
    public $migrateToHybrid;
    protected $_name = [
        'destResourceId' => 'DestResourceId',
        'instanceIds' => 'InstanceIds',
        'migrateToHybrid' => 'MigrateToHybrid',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destResourceId) {
            $res['DestResourceId'] = $this->destResourceId;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->migrateToHybrid) {
            $res['MigrateToHybrid'] = $this->migrateToHybrid;
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
        if (isset($map['DestResourceId'])) {
            $model->destResourceId = $map['DestResourceId'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MigrateToHybrid'])) {
            $model->migrateToHybrid = $map['MigrateToHybrid'];
        }

        return $model;
    }
}
