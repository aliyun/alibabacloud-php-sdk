<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorComputeSummaryRequest;

use AlibabaCloud\Tea\Model;

class componentInfo extends Model
{
    /**
     * @description Set the filter condition name based on the value of ComponentType. For example, if you set ComponentType to queue, you can specify a specific queue name to obtain the resource usage of a specific queue.
     *
     * @example MAPREDUCE
     *
     * @var string
     */
    public $componentName;

    /**
     * @description The resource type for filtering. Valid values:
     *
     *   engine: filters results by engine.
     *   queue: filters results by queue.
     *   cluster: displays the results at the cluster level.
     *
     * If you do not specify this parameter, the information at the cluster level is displayed by default.
     * @example engine
     *
     * @var string
     */
    public $componentType;
    protected $_name = [
        'componentName' => 'ComponentName',
        'componentType' => 'ComponentType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        return $model;
    }
}
