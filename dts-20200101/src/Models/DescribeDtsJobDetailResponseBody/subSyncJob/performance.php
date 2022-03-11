<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob;

use AlibabaCloud\Tea\Model;

class performance extends Model
{
    /**
     * @description 每秒同步的流量，单位为：MB/s
     *
     * @var string
     */
    public $flow;

    /**
     * @description 每秒同步的记录数
     *
     * @var string
     */
    public $rps;
    protected $_name = [
        'flow' => 'Flow',
        'rps'  => 'Rps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->rps) {
            $res['Rps'] = $this->rps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['Rps'])) {
            $model->rps = $map['Rps'];
        }

        return $model;
    }
}
