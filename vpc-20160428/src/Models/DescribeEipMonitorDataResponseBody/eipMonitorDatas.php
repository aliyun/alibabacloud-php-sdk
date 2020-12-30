<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipMonitorDataResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipMonitorDataResponseBody\eipMonitorDatas\eipMonitorData;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipMonitorData) {
            $res['EipMonitorData'] = [];
            if (null !== $this->eipMonitorData && \is_array($this->eipMonitorData)) {
                $n = 0;
                foreach ($this->eipMonitorData as $item) {
                    $res['EipMonitorData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipMonitorDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipMonitorData'])) {
            if (!empty($map['EipMonitorData'])) {
                $model->eipMonitorData = [];
                $n                     = 0;
                foreach ($map['EipMonitorData'] as $item) {
                    $model->eipMonitorData[$n++] = null !== $item ? eipMonitorData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
