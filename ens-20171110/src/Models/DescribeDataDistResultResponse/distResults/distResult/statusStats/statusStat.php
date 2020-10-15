<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse\distResults\distResult\statusStats;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse\distResults\distResult\statusStats\statusStat\instances;
use AlibabaCloud\Tea\Model;

class statusStat extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $instanceCount;

    /**
     * @var instances
     */
    public $instances;
    protected $_name = [
        'status'        => 'Status',
        'instanceCount' => 'InstanceCount',
        'instances'     => 'Instances',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('instanceCount', $this->instanceCount, true);
        Model::validateRequired('instances', $this->instances, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusStat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }

        return $model;
    }
}
