<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesResponseBody\ruleIds;
use AlibabaCloud\Tea\Model;

class CreateRulesResponseBody extends Model
{
    /**
     * @description 异步任务Id
     *
     * @var string
     */
    public $jobId;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 转发规则标识列表
     *
     * @var ruleIds[]
     */
    public $ruleIds;
    protected $_name = [
        'jobId'     => 'JobId',
        'requestId' => 'RequestId',
        'ruleIds'   => 'RuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = [];
            if (null !== $this->ruleIds && \is_array($this->ruleIds)) {
                $n = 0;
                foreach ($this->ruleIds as $item) {
                    $res['RuleIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = [];
                $n              = 0;
                foreach ($map['RuleIds'] as $item) {
                    $model->ruleIds[$n++] = null !== $item ? ruleIds::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
