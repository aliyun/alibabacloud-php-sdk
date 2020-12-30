<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\cpuStats;

use AlibabaCloud\Tea\Model;

class cpuUsage extends Model
{
    /**
     * @var int
     */
    public $user;

    /**
     * @var int[]
     */
    public $perCpuUsages;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $system;
    protected $_name = [
        'user'         => 'User',
        'perCpuUsages' => 'PerCpuUsages',
        'total'        => 'Total',
        'system'       => 'System',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->perCpuUsages) {
            $res['PerCpuUsages'] = $this->perCpuUsages;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->system) {
            $res['System'] = $this->system;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['PerCpuUsages'])) {
            if (!empty($map['PerCpuUsages'])) {
                $model->perCpuUsages = $map['PerCpuUsages'];
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }

        return $model;
    }
}
