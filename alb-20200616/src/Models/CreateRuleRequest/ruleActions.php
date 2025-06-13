<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\corsConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\fixedResponseConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\forwardGroupConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\insertHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\redirectConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\removeHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\rewriteConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\trafficLimitConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\trafficMirrorConfig;

class ruleActions extends Model
{
    /**
     * @var corsConfig
     */
    public $corsConfig;

    /**
     * @var fixedResponseConfig
     */
    public $fixedResponseConfig;

    /**
     * @var forwardGroupConfig
     */
    public $forwardGroupConfig;

    /**
     * @var insertHeaderConfig
     */
    public $insertHeaderConfig;

    /**
     * @var int
     */
    public $order;

    /**
     * @var redirectConfig
     */
    public $redirectConfig;

    /**
     * @var removeHeaderConfig
     */
    public $removeHeaderConfig;

    /**
     * @var rewriteConfig
     */
    public $rewriteConfig;

    /**
     * @var trafficLimitConfig
     */
    public $trafficLimitConfig;

    /**
     * @var trafficMirrorConfig
     */
    public $trafficMirrorConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'corsConfig' => 'CorsConfig',
        'fixedResponseConfig' => 'FixedResponseConfig',
        'forwardGroupConfig' => 'ForwardGroupConfig',
        'insertHeaderConfig' => 'InsertHeaderConfig',
        'order' => 'Order',
        'redirectConfig' => 'RedirectConfig',
        'removeHeaderConfig' => 'RemoveHeaderConfig',
        'rewriteConfig' => 'RewriteConfig',
        'trafficLimitConfig' => 'TrafficLimitConfig',
        'trafficMirrorConfig' => 'TrafficMirrorConfig',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->corsConfig) {
            $this->corsConfig->validate();
        }
        if (null !== $this->fixedResponseConfig) {
            $this->fixedResponseConfig->validate();
        }
        if (null !== $this->forwardGroupConfig) {
            $this->forwardGroupConfig->validate();
        }
        if (null !== $this->insertHeaderConfig) {
            $this->insertHeaderConfig->validate();
        }
        if (null !== $this->redirectConfig) {
            $this->redirectConfig->validate();
        }
        if (null !== $this->removeHeaderConfig) {
            $this->removeHeaderConfig->validate();
        }
        if (null !== $this->rewriteConfig) {
            $this->rewriteConfig->validate();
        }
        if (null !== $this->trafficLimitConfig) {
            $this->trafficLimitConfig->validate();
        }
        if (null !== $this->trafficMirrorConfig) {
            $this->trafficMirrorConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corsConfig) {
            $res['CorsConfig'] = null !== $this->corsConfig ? $this->corsConfig->toArray($noStream) : $this->corsConfig;
        }

        if (null !== $this->fixedResponseConfig) {
            $res['FixedResponseConfig'] = null !== $this->fixedResponseConfig ? $this->fixedResponseConfig->toArray($noStream) : $this->fixedResponseConfig;
        }

        if (null !== $this->forwardGroupConfig) {
            $res['ForwardGroupConfig'] = null !== $this->forwardGroupConfig ? $this->forwardGroupConfig->toArray($noStream) : $this->forwardGroupConfig;
        }

        if (null !== $this->insertHeaderConfig) {
            $res['InsertHeaderConfig'] = null !== $this->insertHeaderConfig ? $this->insertHeaderConfig->toArray($noStream) : $this->insertHeaderConfig;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->redirectConfig) {
            $res['RedirectConfig'] = null !== $this->redirectConfig ? $this->redirectConfig->toArray($noStream) : $this->redirectConfig;
        }

        if (null !== $this->removeHeaderConfig) {
            $res['RemoveHeaderConfig'] = null !== $this->removeHeaderConfig ? $this->removeHeaderConfig->toArray($noStream) : $this->removeHeaderConfig;
        }

        if (null !== $this->rewriteConfig) {
            $res['RewriteConfig'] = null !== $this->rewriteConfig ? $this->rewriteConfig->toArray($noStream) : $this->rewriteConfig;
        }

        if (null !== $this->trafficLimitConfig) {
            $res['TrafficLimitConfig'] = null !== $this->trafficLimitConfig ? $this->trafficLimitConfig->toArray($noStream) : $this->trafficLimitConfig;
        }

        if (null !== $this->trafficMirrorConfig) {
            $res['TrafficMirrorConfig'] = null !== $this->trafficMirrorConfig ? $this->trafficMirrorConfig->toArray($noStream) : $this->trafficMirrorConfig;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CorsConfig'])) {
            $model->corsConfig = corsConfig::fromMap($map['CorsConfig']);
        }

        if (isset($map['FixedResponseConfig'])) {
            $model->fixedResponseConfig = fixedResponseConfig::fromMap($map['FixedResponseConfig']);
        }

        if (isset($map['ForwardGroupConfig'])) {
            $model->forwardGroupConfig = forwardGroupConfig::fromMap($map['ForwardGroupConfig']);
        }

        if (isset($map['InsertHeaderConfig'])) {
            $model->insertHeaderConfig = insertHeaderConfig::fromMap($map['InsertHeaderConfig']);
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['RedirectConfig'])) {
            $model->redirectConfig = redirectConfig::fromMap($map['RedirectConfig']);
        }

        if (isset($map['RemoveHeaderConfig'])) {
            $model->removeHeaderConfig = removeHeaderConfig::fromMap($map['RemoveHeaderConfig']);
        }

        if (isset($map['RewriteConfig'])) {
            $model->rewriteConfig = rewriteConfig::fromMap($map['RewriteConfig']);
        }

        if (isset($map['TrafficLimitConfig'])) {
            $model->trafficLimitConfig = trafficLimitConfig::fromMap($map['TrafficLimitConfig']);
        }

        if (isset($map['TrafficMirrorConfig'])) {
            $model->trafficMirrorConfig = trafficMirrorConfig::fromMap($map['TrafficMirrorConfig']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
