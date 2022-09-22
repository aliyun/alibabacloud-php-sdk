<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody\instancesFailModels;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody\instancesFailModels\instancesFailModel\failModels;
use AlibabaCloud\Tea\Model;

class instancesFailModel extends Model
{
    /**
     * @var failModels
     */
    public $failModels;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'failModels' => 'FailModels',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failModels) {
            $res['FailModels'] = null !== $this->failModels ? $this->failModels->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instancesFailModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailModels'])) {
            $model->failModels = failModels::fromMap($map['FailModels']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
