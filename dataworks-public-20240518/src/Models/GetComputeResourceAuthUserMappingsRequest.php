<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class GetComputeResourceAuthUserMappingsRequest extends Model
{
    /**
     * @var int
     */
    public $computeResourceId;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'computeResourceId' => 'ComputeResourceId',
        'projectId' => 'ProjectId',
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

        return $model;
    }
}
