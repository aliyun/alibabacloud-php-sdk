<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceHealthStatusResponseBody\healthStatusModel;
use AlibabaCloud\Tea\Model;

class DescribeInstanceHealthStatusResponseBody extends Model
{
    /**
     * @var healthStatusModel[]
     */
    public $healthStatusModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'healthStatusModel' => 'HealthStatusModel',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthStatusModel) {
            $res['HealthStatusModel'] = [];
            if (null !== $this->healthStatusModel && \is_array($this->healthStatusModel)) {
                $n = 0;
                foreach ($this->healthStatusModel as $item) {
                    $res['HealthStatusModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceHealthStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthStatusModel'])) {
            if (!empty($map['HealthStatusModel'])) {
                $model->healthStatusModel = [];
                $n                        = 0;
                foreach ($map['HealthStatusModel'] as $item) {
                    $model->healthStatusModel[$n++] = null !== $item ? healthStatusModel::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
