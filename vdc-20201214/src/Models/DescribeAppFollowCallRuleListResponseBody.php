<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeAppFollowCallRuleListResponseBody\appFollowCallRuleList;
use AlibabaCloud\Tea\Model;

class DescribeAppFollowCallRuleListResponseBody extends Model
{
    /**
     * @description 通信监测关注规则相关数据列表
     *
     * @var appFollowCallRuleList[]
     */
    public $appFollowCallRuleList;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appFollowCallRuleList' => 'AppFollowCallRuleList',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appFollowCallRuleList) {
            $res['AppFollowCallRuleList'] = [];
            if (null !== $this->appFollowCallRuleList && \is_array($this->appFollowCallRuleList)) {
                $n = 0;
                foreach ($this->appFollowCallRuleList as $item) {
                    $res['AppFollowCallRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAppFollowCallRuleListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppFollowCallRuleList'])) {
            if (!empty($map['AppFollowCallRuleList'])) {
                $model->appFollowCallRuleList = [];
                $n                            = 0;
                foreach ($map['AppFollowCallRuleList'] as $item) {
                    $model->appFollowCallRuleList[$n++] = null !== $item ? appFollowCallRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
