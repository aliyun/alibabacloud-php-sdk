<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppExpMetricRuleListResponseBody\appExpMetricRuleList;
use AlibabaCloud\Tea\Model;

class DescribeAppExpMetricRuleListResponseBody extends Model
{
    /**
     * @description 用户体验阈值规则相关数据列表
     *
     * @var appExpMetricRuleList[]
     */
    public $appExpMetricRuleList;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appExpMetricRuleList' => 'AppExpMetricRuleList',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appExpMetricRuleList) {
            $res['AppExpMetricRuleList'] = [];
            if (null !== $this->appExpMetricRuleList && \is_array($this->appExpMetricRuleList)) {
                $n = 0;
                foreach ($this->appExpMetricRuleList as $item) {
                    $res['AppExpMetricRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAppExpMetricRuleListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppExpMetricRuleList'])) {
            if (!empty($map['AppExpMetricRuleList'])) {
                $model->appExpMetricRuleList = [];
                $n                           = 0;
                foreach ($map['AppExpMetricRuleList'] as $item) {
                    $model->appExpMetricRuleList[$n++] = null !== $item ? appExpMetricRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
