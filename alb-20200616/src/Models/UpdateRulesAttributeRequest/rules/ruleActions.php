<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\corsConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\fixedResponseConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\forwardGroupConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\insertHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\redirectConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\removeHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\rewriteConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\trafficLimitConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\trafficMirrorConfig;
use AlibabaCloud\Tea\Model;

class ruleActions extends Model
{
    /**
     * @description The CORS configuration.
     *
     * @var corsConfig
     */
    public $corsConfig;

    /**
     * @description The configuration of the action to return a custom response. You can specify the configurations of up to 20 actions to return a custom response.
     *
     * @var fixedResponseConfig
     */
    public $fixedResponseConfig;

    /**
     * @description The configuration of the action to forward requests to server groups. You can specify the configurations of up to 20 actions to forward requests to server groups.
     *
     * @var forwardGroupConfig
     */
    public $forwardGroupConfig;

    /**
     * @description The configuration of the action to insert a header. You can specify the configurations of up to 20 actions to insert a header.
     *
     * @var insertHeaderConfig
     */
    public $insertHeaderConfig;

    /**
     * @description The priority of the action. Valid values: **1** to **50000**. A lower value specifies a higher priority. The actions of a forwarding rule are applied in descending order of priority. This parameter cannot be left empty. The priority of each action within a forwarding rule must be unique. You can specify priorities for up to 20 actions.
     *
     * @example 1
     *
     * @var int
     */
    public $order;

    /**
     * @description The configuration of the redirect action. You can specify the configurations of up to 20 redirect actions.
     *
     * @var redirectConfig
     */
    public $redirectConfig;

    /**
     * @description The action to remove an HTTP header. You can specify the configurations of up to 20 actions to remove an HTTP header.
     *
     * @var removeHeaderConfig
     */
    public $removeHeaderConfig;

    /**
     * @description The configuration of the rewrite action. You can specify the configurations of up to 20 rewrite actions.
     *
     * @var rewriteConfig
     */
    public $rewriteConfig;

    /**
     * @description The configuration of traffic throttling. You can add up to 20 configuration records.
     *
     * @var trafficLimitConfig
     */
    public $trafficLimitConfig;

    /**
     * @description The configuration of traffic mirroring. You can add up to 20 configuration records.
     *
     * @var trafficMirrorConfig
     */
    public $trafficMirrorConfig;

    /**
     * @description The type of the forwarding rule. You can specify up to seven types. Valid values:
     *
     *   **Host**: Requests are distributed based on hosts.
     *   **Path**: Requests are distributed based on paths.
     *   **Header**: Requests are distributed based on HTTP headers.
     *   **QueryString**: Requests are distributed based on query strings.
     *   **Method**: Requests are distributed based on request methods.
     *   **Cookie**: Requests are distributed based on cookies.
     *   **SourceIp**: Requests are distributed based on source IP addresses.
     *
     * @example Host
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
