<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticPlanResponseBody\elasticPlanList;
use AlibabaCloud\Tea\Model;

class DescribeElasticPlanResponseBody extends Model
{
    /**
     * @description Details of the scaling plans.
     *
     * @var elasticPlanList[]
     */
    public $elasticPlanList;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticPlanList' => 'ElasticPlanList',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticPlanList) {
            $res['ElasticPlanList'] = [];
            if (null !== $this->elasticPlanList && \is_array($this->elasticPlanList)) {
                $n = 0;
                foreach ($this->elasticPlanList as $item) {
                    $res['ElasticPlanList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeElasticPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticPlanList'])) {
            if (!empty($map['ElasticPlanList'])) {
                $model->elasticPlanList = [];
                $n                      = 0;
                foreach ($map['ElasticPlanList'] as $item) {
                    $model->elasticPlanList[$n++] = null !== $item ? elasticPlanList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
