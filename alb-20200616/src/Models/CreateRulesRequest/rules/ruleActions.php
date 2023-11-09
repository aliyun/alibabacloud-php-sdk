<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\corsConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\fixedResponseConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\forwardGroupConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\insertHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\redirectConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\removeHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\rewriteConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\trafficLimitConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions\trafficMirrorConfig;
use AlibabaCloud\Tea\Model;

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
     * @description The port to which requests are redirected.
     *
     *   **${port}** (default): If you set the value to ${port}, you cannot append other characters.
     *   You can also enter a port number. Valid values: **1 to 63335**.
     *
     * @example 1
     *
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
     * @description The ID of the vServer group.
     *
     * @example ForwardGroup
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'corsConfig'          => 'CorsConfig',
        'fixedResponseConfig' => 'FixedResponseConfig',
        'forwardGroupConfig'  => 'ForwardGroupConfig',
        'insertHeaderConfig'  => 'InsertHeaderConfig',
        'order'               => 'Order',
        'redirectConfig'      => 'RedirectConfig',
        'removeHeaderConfig'  => 'RemoveHeaderConfig',
        'rewriteConfig'       => 'RewriteConfig',
        'trafficLimitConfig'  => 'TrafficLimitConfig',
        'trafficMirrorConfig' => 'TrafficMirrorConfig',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corsConfig) {
            $res['CorsConfig'] = null !== $this->corsConfig ? $this->corsConfig->toMap() : null;
        }
        if (null !== $this->fixedResponseConfig) {
            $res['FixedResponseConfig'] = null !== $this->fixedResponseConfig ? $this->fixedResponseConfig->toMap() : null;
        }
        if (null !== $this->forwardGroupConfig) {
            $res['ForwardGroupConfig'] = null !== $this->forwardGroupConfig ? $this->forwardGroupConfig->toMap() : null;
        }
        if (null !== $this->insertHeaderConfig) {
            $res['InsertHeaderConfig'] = null !== $this->insertHeaderConfig ? $this->insertHeaderConfig->toMap() : null;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->redirectConfig) {
            $res['RedirectConfig'] = null !== $this->redirectConfig ? $this->redirectConfig->toMap() : null;
        }
        if (null !== $this->removeHeaderConfig) {
            $res['RemoveHeaderConfig'] = null !== $this->removeHeaderConfig ? $this->removeHeaderConfig->toMap() : null;
        }
        if (null !== $this->rewriteConfig) {
            $res['RewriteConfig'] = null !== $this->rewriteConfig ? $this->rewriteConfig->toMap() : null;
        }
        if (null !== $this->trafficLimitConfig) {
            $res['TrafficLimitConfig'] = null !== $this->trafficLimitConfig ? $this->trafficLimitConfig->toMap() : null;
        }
        if (null !== $this->trafficMirrorConfig) {
            $res['TrafficMirrorConfig'] = null !== $this->trafficMirrorConfig ? $this->trafficMirrorConfig->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleActions
     */
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
