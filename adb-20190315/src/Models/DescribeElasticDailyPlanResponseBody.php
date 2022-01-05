<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticDailyPlanResponseBody\elasticDailyPlanList;
use AlibabaCloud\Tea\Model;

class DescribeElasticDailyPlanResponseBody extends Model
{
    /**
     * @var elasticDailyPlanList[]
     */
    public $elasticDailyPlanList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticDailyPlanList' => 'ElasticDailyPlanList',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticDailyPlanList) {
            $res['ElasticDailyPlanList'] = [];
            if (null !== $this->elasticDailyPlanList && \is_array($this->elasticDailyPlanList)) {
                $n = 0;
                foreach ($this->elasticDailyPlanList as $item) {
                    $res['ElasticDailyPlanList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticDailyPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticDailyPlanList'])) {
            if (!empty($map['ElasticDailyPlanList'])) {
                $model->elasticDailyPlanList = [];
                $n                           = 0;
                foreach ($map['ElasticDailyPlanList'] as $item) {
                    $model->elasticDailyPlanList[$n++] = null !== $item ? elasticDailyPlanList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
