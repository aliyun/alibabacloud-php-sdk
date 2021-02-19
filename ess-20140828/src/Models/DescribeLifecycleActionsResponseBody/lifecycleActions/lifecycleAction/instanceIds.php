<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeLifecycleActionsResponseBody\lifecycleActions\lifecycleAction;

use AlibabaCloud\Tea\Model;

class instanceIds extends Model
{
    /**
     * @var string[]
     */
    public $instanceId;
    protected $_name = [
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }

        return $model;
    }
}
