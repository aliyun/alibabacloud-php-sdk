<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults\distResult\statusStats;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults\distResult\statusStats\statusStat\instances;
use AlibabaCloud\Tea\Model;

class statusStat extends Model
{
    /**
     * @var string
     */
    public $instanceCount;

    /**
     * @var instances
     */
    public $instances;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceCount' => 'InstanceCount',
        'instances'     => 'Instances',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
