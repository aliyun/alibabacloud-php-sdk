<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody\instancesFailModels;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody\planFailModels;
use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateMigrationPlanResponseBody\sgFailModels;
use AlibabaCloud\Tea\Model;

class CreateMigrationPlanResponseBody extends Model
{
    /**
     * @var instancesFailModels
     */
    public $instancesFailModels;

    /**
     * @var string
     */
    public $migrationPlanId;

    /**
     * @var planFailModels
     */
    public $planFailModels;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sgFailModels
     */
    public $sgFailModels;
    protected $_name = [
        'instancesFailModels' => 'InstancesFailModels',
        'migrationPlanId'     => 'MigrationPlanId',
        'planFailModels'      => 'PlanFailModels',
        'requestId'           => 'RequestId',
        'sgFailModels'        => 'SgFailModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancesFailModels) {
            $res['InstancesFailModels'] = null !== $this->instancesFailModels ? $this->instancesFailModels->toMap() : null;
        }
        if (null !== $this->migrationPlanId) {
            $res['MigrationPlanId'] = $this->migrationPlanId;
        }
        if (null !== $this->planFailModels) {
            $res['PlanFailModels'] = null !== $this->planFailModels ? $this->planFailModels->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sgFailModels) {
            $res['SgFailModels'] = null !== $this->sgFailModels ? $this->sgFailModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMigrationPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstancesFailModels'])) {
            $model->instancesFailModels = instancesFailModels::fromMap($map['InstancesFailModels']);
        }
        if (isset($map['MigrationPlanId'])) {
            $model->migrationPlanId = $map['MigrationPlanId'];
        }
        if (isset($map['PlanFailModels'])) {
            $model->planFailModels = planFailModels::fromMap($map['PlanFailModels']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SgFailModels'])) {
            $model->sgFailModels = sgFailModels::fromMap($map['SgFailModels']);
        }

        return $model;
    }
}
