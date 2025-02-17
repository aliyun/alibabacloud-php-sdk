<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponseBody\monitorData\instanceMonitorData;

class monitorData extends Model
{
    /**
     * @var instanceMonitorData[]
     */
    public $instanceMonitorData;
    protected $_name = [
        'instanceMonitorData' => 'InstanceMonitorData',
    ];

    public function validate()
    {
        if (\is_array($this->instanceMonitorData)) {
            Model::validateArray($this->instanceMonitorData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceMonitorData) {
            if (\is_array($this->instanceMonitorData)) {
                $res['InstanceMonitorData'] = [];
                $n1                         = 0;
                foreach ($this->instanceMonitorData as $item1) {
                    $res['InstanceMonitorData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['InstanceMonitorData'])) {
            if (!empty($map['InstanceMonitorData'])) {
                $model->instanceMonitorData = [];
                $n1                         = 0;
                foreach ($map['InstanceMonitorData'] as $item1) {
                    $model->instanceMonitorData[$n1++] = instanceMonitorData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
