<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanAttributeResponseBody\elasticPlan;

class DescribeElasticPlanAttributeResponseBody extends Model
{
    /**
     * @var elasticPlan
     */
    public $elasticPlan;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticPlan' => 'ElasticPlan',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->elasticPlan) {
            $this->elasticPlan->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticPlan) {
            $res['ElasticPlan'] = null !== $this->elasticPlan ? $this->elasticPlan->toArray($noStream) : $this->elasticPlan;
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
        if (isset($map['ElasticPlan'])) {
            $model->elasticPlan = elasticPlan::fromMap($map['ElasticPlan']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
