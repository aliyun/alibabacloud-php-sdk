<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponseBody\ruleConfig;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponseBody\ruleStatus;
use AlibabaCloud\Tea\Model;

class QuerySchedruleOnDemandResponseBody extends Model
{
    /**
     * @description The ID of the on-demand instance.
     *
     * @example ddosbgp-cn-z2q1qzxb****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the request.
     *
     * @example 4A8F9980-5ACB-497F-9F15-48E9D6B29028
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The configurations of the scheduling rule.
     *
     * @var ruleConfig[]
     */
    public $ruleConfig;

    /**
     * @description The status of the scheduling rule.
     *
     * @var ruleStatus[]
     */
    public $ruleStatus;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 171986973287****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'requestId'  => 'RequestId',
        'ruleConfig' => 'RuleConfig',
        'ruleStatus' => 'RuleStatus',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = [];
            if (null !== $this->ruleStatus && \is_array($this->ruleStatus)) {
                $n = 0;
                foreach ($this->ruleStatus as $item) {
                    $res['RuleStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['RuleStatus'])) {
            if (!empty($map['RuleStatus'])) {
                $model->ruleStatus = [];
                $n                 = 0;
                foreach ($map['RuleStatus'] as $item) {
                    $model->ruleStatus[$n++] = null !== $item ? ruleStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
