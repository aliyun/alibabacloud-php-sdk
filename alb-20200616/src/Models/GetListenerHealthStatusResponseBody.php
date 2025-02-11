<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\ruleHealthStatus;

class GetListenerHealthStatusResponseBody extends Model
{
    /**
     * @var listenerHealthStatus[]
     */
    public $listenerHealthStatus;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->listenerHealthStatus)) {
            Model::validateArray($this->listenerHealthStatus);
        }
        if (\is_array($this->ruleHealthStatus)) {
            Model::validateArray($this->ruleHealthStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listenerHealthStatus) {
            if (\is_array($this->listenerHealthStatus)) {
                $res['ListenerHealthStatus'] = [];
                $n1                          = 0;
                foreach ($this->listenerHealthStatus as $item1) {
                    $res['ListenerHealthStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->ruleHealthStatus)) {
                $res['RuleHealthStatus'] = [];
                $n1                      = 0;
                foreach ($this->ruleHealthStatus as $item1) {
                    $res['RuleHealthStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ListenerHealthStatus'])) {
            if (!empty($map['ListenerHealthStatus'])) {
                $model->listenerHealthStatus = [];
                $n1                          = 0;
                foreach ($map['ListenerHealthStatus'] as $item1) {
                    $model->listenerHealthStatus[$n1++] = listenerHealthStatus::fromMap($item1);
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
                $n1                      = 0;
                foreach ($map['RuleHealthStatus'] as $item1) {
                    $model->ruleHealthStatus[$n1++] = ruleHealthStatus::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
