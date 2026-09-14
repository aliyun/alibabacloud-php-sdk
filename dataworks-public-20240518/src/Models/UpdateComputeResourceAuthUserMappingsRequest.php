<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateComputeResourceAuthUserMappingsRequest\upserts;

class UpdateComputeResourceAuthUserMappingsRequest extends Model
{
    /**
     * @var int
     */
    public $computeResourceId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string[]
     */
    public $removeUserIds;

    /**
     * @var upserts[]
     */
    public $upserts;
    protected $_name = [
        'computeResourceId' => 'ComputeResourceId',
        'projectId' => 'ProjectId',
        'removeUserIds' => 'RemoveUserIds',
        'upserts' => 'Upserts',
    ];

    public function validate()
    {
        if (\is_array($this->removeUserIds)) {
            Model::validateArray($this->removeUserIds);
        }
        if (\is_array($this->upserts)) {
            Model::validateArray($this->upserts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeResourceId) {
            $res['ComputeResourceId'] = $this->computeResourceId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->removeUserIds) {
            if (\is_array($this->removeUserIds)) {
                $res['RemoveUserIds'] = [];
                $n1 = 0;
                foreach ($this->removeUserIds as $item1) {
                    $res['RemoveUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->upserts) {
            if (\is_array($this->upserts)) {
                $res['Upserts'] = [];
                $n1 = 0;
                foreach ($this->upserts as $item1) {
                    $res['Upserts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ComputeResourceId'])) {
            $model->computeResourceId = $map['ComputeResourceId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RemoveUserIds'])) {
            if (!empty($map['RemoveUserIds'])) {
                $model->removeUserIds = [];
                $n1 = 0;
                foreach ($map['RemoveUserIds'] as $item1) {
                    $model->removeUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Upserts'])) {
            if (!empty($map['Upserts'])) {
                $model->upserts = [];
                $n1 = 0;
                foreach ($map['Upserts'] as $item1) {
                    $model->upserts[$n1] = upserts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
