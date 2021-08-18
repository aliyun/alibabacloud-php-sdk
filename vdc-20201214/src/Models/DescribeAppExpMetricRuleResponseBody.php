<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppExpMetricRuleResponseBody\appExpMetricRule;
use AlibabaCloud\Tea\Model;

class DescribeAppExpMetricRuleResponseBody extends Model
{
    /**
     * @description 获取用户体验阈值规则相关数据
     *
     * @var appExpMetricRule
     */
    public $appExpMetricRule;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appExpMetricRule' => 'AppExpMetricRule',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appExpMetricRule) {
            $res['AppExpMetricRule'] = null !== $this->appExpMetricRule ? $this->appExpMetricRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppExpMetricRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppExpMetricRule'])) {
            $model->appExpMetricRule = appExpMetricRule::fromMap($map['AppExpMetricRule']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
