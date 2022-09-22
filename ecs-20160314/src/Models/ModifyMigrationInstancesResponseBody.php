<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyMigrationInstancesResponseBody\instancesFailModels;
use AlibabaCloud\Tea\Model;

class ModifyMigrationInstancesResponseBody extends Model
{
    /**
     * @var instancesFailModels
     */
    public $instancesFailModels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instancesFailModels' => 'InstancesFailModels',
        'requestId'           => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMigrationInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstancesFailModels'])) {
            $model->instancesFailModels = instancesFailModels::fromMap($map['InstancesFailModels']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
