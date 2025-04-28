<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeElasticPlanResponseBody\elasticPlanList;

class DescribeElasticPlanResponseBody extends Model
{
    /**
     * @var elasticPlanList[]
     */
    public $elasticPlanList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticPlanList' => 'ElasticPlanList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->elasticPlanList)) {
            Model::validateArray($this->elasticPlanList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticPlanList) {
            if (\is_array($this->elasticPlanList)) {
                $res['ElasticPlanList'] = [];
                $n1 = 0;
                foreach ($this->elasticPlanList as $item1) {
                    $res['ElasticPlanList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ElasticPlanList'])) {
            if (!empty($map['ElasticPlanList'])) {
                $model->elasticPlanList = [];
                $n1 = 0;
                foreach ($map['ElasticPlanList'] as $item1) {
                    $model->elasticPlanList[$n1++] = elasticPlanList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
