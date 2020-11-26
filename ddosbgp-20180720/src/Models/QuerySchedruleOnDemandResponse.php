<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponse\ruleConfig;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponse\ruleStatus;
use AlibabaCloud\Tea\Model;

class QuerySchedruleOnDemandResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var ruleConfig[]
     */
    public $ruleConfig;

    /**
     * @var ruleStatus[]
     */
    public $ruleStatus;
    protected $_name = [
        'requestId'  => 'RequestId',
        'userId'     => 'UserId',
        'instanceId' => 'InstanceId',
        'ruleConfig' => 'RuleConfig',
        'ruleStatus' => 'RuleStatus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('ruleConfig', $this->ruleConfig, true);
        Model::validateRequired('ruleStatus', $this->ruleStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySchedruleOnDemandResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        return $model;
    }
}
