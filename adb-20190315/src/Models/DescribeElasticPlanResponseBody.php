<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticPlanResponseBody\elasticPlanList;
use AlibabaCloud\Tea\Model;

class DescribeElasticPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var elasticPlanList[]
     */
    public $elasticPlanList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'elasticPlanList' => 'ElasticPlanList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->elasticPlanList) {
            $res['ElasticPlanList'] = [];
            if (null !== $this->elasticPlanList && \is_array($this->elasticPlanList)) {
                $n = 0;
                foreach ($this->elasticPlanList as $item) {
                    $res['ElasticPlanList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ElasticPlanList'])) {
            if (!empty($map['ElasticPlanList'])) {
                $model->elasticPlanList = [];
                $n                      = 0;
                foreach ($map['ElasticPlanList'] as $item) {
                    $model->elasticPlanList[$n++] = null !== $item ? elasticPlanList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
