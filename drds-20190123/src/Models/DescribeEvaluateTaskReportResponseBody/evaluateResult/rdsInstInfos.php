<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeEvaluateTaskReportResponseBody\evaluateResult;

use AlibabaCloud\Tea\Model;

class rdsInstInfos extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeEvaluateTaskReportResponseBody\evaluateResult\rdsInstInfos\rdsInstInfos[]
     */
    public $rdsInstInfos;
    protected $_name = [
        'rdsInstInfos' => 'RdsInstInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsInstInfos) {
            $res['RdsInstInfos'] = [];
            if (null !== $this->rdsInstInfos && \is_array($this->rdsInstInfos)) {
                $n = 0;
                foreach ($this->rdsInstInfos as $item) {
                    $res['RdsInstInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsInstInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsInstInfos'])) {
            if (!empty($map['RdsInstInfos'])) {
                $model->rdsInstInfos = [];
                $n                   = 0;
                foreach ($map['RdsInstInfos'] as $item) {
                    $model->rdsInstInfos[$n++] = null !== $item ? \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeEvaluateTaskReportResponseBody\evaluateResult\rdsInstInfos\rdsInstInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
