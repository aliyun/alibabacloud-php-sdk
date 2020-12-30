<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters\dataCenter;
use AlibabaCloud\Tea\Model;

class dataCenters extends Model
{
    /**
     * @var dataCenter[]
     */
    public $dataCenter;
    protected $_name = [
        'dataCenter' => 'DataCenter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = [];
            if (null !== $this->dataCenter && \is_array($this->dataCenter)) {
                $n = 0;
                foreach ($this->dataCenter as $item) {
                    $res['DataCenter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCenters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCenter'])) {
            if (!empty($map['DataCenter'])) {
                $model->dataCenter = [];
                $n                 = 0;
                foreach ($map['DataCenter'] as $item) {
                    $model->dataCenter[$n++] = null !== $item ? dataCenter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
