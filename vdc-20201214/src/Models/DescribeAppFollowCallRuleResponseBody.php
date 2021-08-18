<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppFollowCallRuleResponseBody\appFollowCallRule;
use AlibabaCloud\Tea\Model;

class DescribeAppFollowCallRuleResponseBody extends Model
{
    /**
     * @description 获取用户体验阈值规则相关数据
     *
     * @var appFollowCallRule
     */
    public $appFollowCallRule;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appFollowCallRule' => 'AppFollowCallRule',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appFollowCallRule) {
            $res['AppFollowCallRule'] = null !== $this->appFollowCallRule ? $this->appFollowCallRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppFollowCallRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppFollowCallRule'])) {
            $model->appFollowCallRule = appFollowCallRule::fromMap($map['AppFollowCallRule']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
