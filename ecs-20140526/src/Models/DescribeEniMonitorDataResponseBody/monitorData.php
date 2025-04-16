<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataResponseBody\monitorData\eniMonitorData;

class monitorData extends Model
{
    /**
     * @var eniMonitorData[]
     */
    public $eniMonitorData;
    protected $_name = [
        'eniMonitorData' => 'EniMonitorData',
    ];

    public function validate()
    {
        if (\is_array($this->eniMonitorData)) {
            Model::validateArray($this->eniMonitorData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eniMonitorData) {
            if (\is_array($this->eniMonitorData)) {
                $res['EniMonitorData'] = [];
                $n1 = 0;
                foreach ($this->eniMonitorData as $item1) {
                    $res['EniMonitorData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EniMonitorData'])) {
            if (!empty($map['EniMonitorData'])) {
                $model->eniMonitorData = [];
                $n1 = 0;
                foreach ($map['EniMonitorData'] as $item1) {
                    $model->eniMonitorData[$n1++] = eniMonitorData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
