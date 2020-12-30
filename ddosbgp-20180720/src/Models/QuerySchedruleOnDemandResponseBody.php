<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponseBody\ruleConfig;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponseBody\ruleStatus;
use AlibabaCloud\Tea\Model;

class QuerySchedruleOnDemandResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var ruleStatus[]
     */
    public $ruleStatus;

    /**
     * @var ruleConfig[]
     */
    public $ruleConfig;
    protected $_name = [
        'requestId'  => 'RequestId',
        'instanceId' => 'InstanceId',
        'userId'     => 'UserId',
        'ruleStatus' => 'RuleStatus',
        'ruleConfig' => 'RuleConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = [];
            if (null !== $this->ruleStatus && \is_array($this->ruleStatus)) {
                $n = 0;
                foreach ($this->ruleStatus as $item) {
                    $res['RuleStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = [];
            if (null !== $this->ruleConfig && \is_array($this->ruleConfig)) {
                $n = 0;
                foreach ($this->ruleConfig as $item) {
                    $res['RuleConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySchedruleOnDemandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RuleStatus'])) {
            if (!empty($map['RuleStatus'])) {
                $model->ruleStatus = [];
                $n                 = 0;
                foreach ($map['RuleStatus'] as $item) {
                    $model->ruleStatus[$n++] = null !== $item ? ruleStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleConfig'])) {
            if (!empty($map['RuleConfig'])) {
                $model->ruleConfig = [];
                $n                 = 0;
                foreach ($map['RuleConfig'] as $item) {
                    $model->ruleConfig[$n++] = null !== $item ? ruleConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
