<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlanAttributeResponseBody\elasticPlan;
use AlibabaCloud\Tea\Model;

class DescribeElasticPlanAttributeResponseBody extends Model
{
    /**
     * @description The queried scaling plan.
     *
     * @var elasticPlan
     */
    public $elasticPlan;

    /**
     * @description The request ID.
     *
     * @example A5C433C2-001F-58E3-99F5-3274C14DF8BD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticPlan' => 'ElasticPlan',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticPlan) {
            $res['ElasticPlan'] = null !== $this->elasticPlan ? $this->elasticPlan->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticPlanAttributeResponseBody
     */
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
