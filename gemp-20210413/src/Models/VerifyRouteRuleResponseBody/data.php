<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\VerifyRouteRuleResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\VerifyRouteRuleResponseBody\data\escalationPlans;
use AlibabaCloud\SDK\GEMP\V20210413\Models\VerifyRouteRuleResponseBody\data\notifySubscriptionNames;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 升级策略名称
     *
     * @var escalationPlans[]
     */
    public $escalationPlans;

    /**
     * @description 验证是否成功
     *
     * @var bool
     */
    public $isValidRule;

    /**
     * @description 验证失败监控源ID
     *
     * @var int[]
     */
    public $monitorSourceIds;

    /**
     * @description 订阅名称
     *
     * @var notifySubscriptionNames[]
     */
    public $notifySubscriptionNames;

    /**
     * @description 流转规则验证失败的原因
     *
     * @var string[]
     */
    public $routeRuleFailReason;

    /**
     * @description 事件或者报警
     *
     * @var string
     */
    public $routeType;
    protected $_name = [
        'escalationPlans'         => 'escalationPlans',
        'isValidRule'             => 'isValidRule',
        'monitorSourceIds'        => 'monitorSourceIds',
        'notifySubscriptionNames' => 'notifySubscriptionNames',
        'routeRuleFailReason'     => 'routeRuleFailReason',
        'routeType'               => 'routeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPlans) {
            $res['escalationPlans'] = [];
            if (null !== $this->escalationPlans && \is_array($this->escalationPlans)) {
                $n = 0;
                foreach ($this->escalationPlans as $item) {
                    $res['escalationPlans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isValidRule) {
            $res['isValidRule'] = $this->isValidRule;
        }
        if (null !== $this->monitorSourceIds) {
            $res['monitorSourceIds'] = $this->monitorSourceIds;
        }
        if (null !== $this->notifySubscriptionNames) {
            $res['notifySubscriptionNames'] = [];
            if (null !== $this->notifySubscriptionNames && \is_array($this->notifySubscriptionNames)) {
                $n = 0;
                foreach ($this->notifySubscriptionNames as $item) {
                    $res['notifySubscriptionNames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeRuleFailReason) {
            $res['routeRuleFailReason'] = $this->routeRuleFailReason;
        }
        if (null !== $this->routeType) {
            $res['routeType'] = $this->routeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalationPlans'])) {
            if (!empty($map['escalationPlans'])) {
                $model->escalationPlans = [];
                $n                      = 0;
                foreach ($map['escalationPlans'] as $item) {
                    $model->escalationPlans[$n++] = null !== $item ? escalationPlans::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['isValidRule'])) {
            $model->isValidRule = $map['isValidRule'];
        }
        if (isset($map['monitorSourceIds'])) {
            if (!empty($map['monitorSourceIds'])) {
                $model->monitorSourceIds = $map['monitorSourceIds'];
            }
        }
        if (isset($map['notifySubscriptionNames'])) {
            if (!empty($map['notifySubscriptionNames'])) {
                $model->notifySubscriptionNames = [];
                $n                              = 0;
                foreach ($map['notifySubscriptionNames'] as $item) {
                    $model->notifySubscriptionNames[$n++] = null !== $item ? notifySubscriptionNames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['routeRuleFailReason'])) {
            if (!empty($map['routeRuleFailReason'])) {
                $model->routeRuleFailReason = $map['routeRuleFailReason'];
            }
        }
        if (isset($map['routeType'])) {
            $model->routeType = $map['routeType'];
        }

        return $model;
    }
}
