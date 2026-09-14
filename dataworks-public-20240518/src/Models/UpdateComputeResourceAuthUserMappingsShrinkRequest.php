<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateComputeResourceAuthUserMappingsShrinkRequest extends Model
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
     * @var string
     */
    public $removeUserIdsShrink;

    /**
     * @var string
     */
    public $upsertsShrink;
    protected $_name = [
        'computeResourceId' => 'ComputeResourceId',
        'projectId' => 'ProjectId',
        'removeUserIdsShrink' => 'RemoveUserIds',
        'upsertsShrink' => 'Upserts',
    ];

    public function validate()
    {
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

        if (null !== $this->removeUserIdsShrink) {
            $res['RemoveUserIds'] = $this->removeUserIdsShrink;
        }

        if (null !== $this->upsertsShrink) {
            $res['Upserts'] = $this->upsertsShrink;
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
            $model->removeUserIdsShrink = $map['RemoveUserIds'];
        }

        if (isset($map['Upserts'])) {
            $model->upsertsShrink = $map['Upserts'];
        }

        return $model;
    }
}
