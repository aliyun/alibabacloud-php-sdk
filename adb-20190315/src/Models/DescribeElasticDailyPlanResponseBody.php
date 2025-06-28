<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticDailyPlanResponseBody\elasticDailyPlanList;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->elasticDailyPlanList)) {
            Model::validateArray($this->elasticDailyPlanList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticDailyPlanList) {
            if (\is_array($this->elasticDailyPlanList)) {
                $res['ElasticDailyPlanList'] = [];
                $n1 = 0;
                foreach ($this->elasticDailyPlanList as $item1) {
                    $res['ElasticDailyPlanList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ElasticDailyPlanList'])) {
            if (!empty($map['ElasticDailyPlanList'])) {
                $model->elasticDailyPlanList = [];
                $n1 = 0;
                foreach ($map['ElasticDailyPlanList'] as $item1) {
                    $model->elasticDailyPlanList[$n1] = elasticDailyPlanList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
