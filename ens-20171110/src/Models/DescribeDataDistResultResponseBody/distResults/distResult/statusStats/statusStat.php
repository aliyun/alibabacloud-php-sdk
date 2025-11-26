<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults\distResult\statusStats;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults\distResult\statusStats\statusStat\instances;

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
        'instances' => 'Instances',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->instances) {
            $this->instances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toArray($noStream) : $this->instances;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
