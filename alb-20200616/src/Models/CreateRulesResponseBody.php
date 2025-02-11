<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesResponseBody\ruleIds;

class CreateRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->ruleIds)) {
            Model::validateArray($this->ruleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleIds) {
            if (\is_array($this->ruleIds)) {
                $res['RuleIds'] = [];
                $n1             = 0;
                foreach ($this->ruleIds as $item1) {
                    $res['RuleIds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = [];
                $n1             = 0;
                foreach ($map['RuleIds'] as $item1) {
                    $model->ruleIds[$n1++] = ruleIds::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
