<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\ruleHealthStatus;
use AlibabaCloud\Tea\Model;

class GetListenerHealthStatusResponseBody extends Model
{
    /**
     * @description 监听健康检查结果
     *
     * @var listenerHealthStatus[]
     */
    public $listenerHealthStatus;

    /**
     * @description 下一页标识
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 转发规则健康检查结果
     *
     * @var ruleHealthStatus[]
     */
    public $ruleHealthStatus;
    protected $_name = [
        'listenerHealthStatus' => 'ListenerHealthStatus',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'ruleHealthStatus'     => 'RuleHealthStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerHealthStatus) {
            $res['ListenerHealthStatus'] = [];
            if (null !== $this->listenerHealthStatus && \is_array($this->listenerHealthStatus)) {
                $n = 0;
                foreach ($this->listenerHealthStatus as $item) {
                    $res['ListenerHealthStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleHealthStatus) {
            $res['RuleHealthStatus'] = [];
            if (null !== $this->ruleHealthStatus && \is_array($this->ruleHealthStatus)) {
                $n = 0;
                foreach ($this->ruleHealthStatus as $item) {
                    $res['RuleHealthStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetListenerHealthStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerHealthStatus'])) {
            if (!empty($map['ListenerHealthStatus'])) {
                $model->listenerHealthStatus = [];
                $n                           = 0;
                foreach ($map['ListenerHealthStatus'] as $item) {
                    $model->listenerHealthStatus[$n++] = null !== $item ? listenerHealthStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleHealthStatus'])) {
            if (!empty($map['RuleHealthStatus'])) {
                $model->ruleHealthStatus = [];
                $n                       = 0;
                foreach ($map['RuleHealthStatus'] as $item) {
                    $model->ruleHealthStatus[$n++] = null !== $item ? ruleHealthStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
