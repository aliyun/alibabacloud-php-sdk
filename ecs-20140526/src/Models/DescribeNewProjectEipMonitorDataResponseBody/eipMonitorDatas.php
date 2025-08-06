<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNewProjectEipMonitorDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNewProjectEipMonitorDataResponseBody\eipMonitorDatas\eipMonitorData;

class eipMonitorDatas extends Model
{
    /**
     * @var eipMonitorData[]
     */
    public $eipMonitorData;
    protected $_name = [
        'eipMonitorData' => 'EipMonitorData',
    ];

    public function validate()
    {
        if (\is_array($this->eipMonitorData)) {
            Model::validateArray($this->eipMonitorData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipMonitorData) {
            if (\is_array($this->eipMonitorData)) {
                $res['EipMonitorData'] = [];
                $n1 = 0;
                foreach ($this->eipMonitorData as $item1) {
                    $res['EipMonitorData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['EipMonitorData'])) {
            if (!empty($map['EipMonitorData'])) {
                $model->eipMonitorData = [];
                $n1 = 0;
                foreach ($map['EipMonitorData'] as $item1) {
                    $model->eipMonitorData[$n1] = eipMonitorData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
