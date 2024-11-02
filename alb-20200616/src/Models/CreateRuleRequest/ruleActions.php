<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\corsConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\fixedResponseConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\forwardGroupConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\insertHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\redirectConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\removeHeaderConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\rewriteConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\trafficLimitConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleActions\trafficMirrorConfig;
use AlibabaCloud\Tea\Model;

class ruleActions extends Model
{
    /**
     * @description Request forwarding based on CORS.
     *
     * @var corsConfig
     */
    public $corsConfig;

    /**
     * @description The configuration of the custom response.
     *
     * @var fixedResponseConfig
     */
    public $fixedResponseConfig;

    /**
     * @description The server groups to which requests are forwarded. You can specify at most five server groups for each forwarding rule.
     *
     * @var forwardGroupConfig
     */
    public $forwardGroupConfig;

    /**
     * @description The key of the header to be inserted.
     *
     * @var insertHeaderConfig
     */
    public $insertHeaderConfig;

    /**
     * @description The priority of the action. Valid values: **1 to 50000**. A smaller value indicates a higher priority. The actions of a forwarding rule are applied in descending order of priority. This parameter cannot empty. The priority of each action within a forwarding rule must be unique.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $order;

    /**
     * @description The configuration of the redirect action.
     *
     * >  Do not set all fields in **RedirectConfig** to default values, except for **httpCode**.
     * @var redirectConfig
     */
    public $redirectConfig;

    /**
     * @description The HTTP header to be removed.
     *
     * @var removeHeaderConfig
     */
    public $removeHeaderConfig;

    /**
     * @description The configuration of the rewrite action.
     *
     * >  If you specify multiple actions for a forwarding rule, you must configure the **ForwardGroup** parameter for the **RewriteConfig** action.
     * @var rewriteConfig
     */
    public $rewriteConfig;

    /**
     * @description The configuration of the traffic throttling action.
     *
     * @var trafficLimitConfig
     */
    public $trafficLimitConfig;

    /**
     * @description The configuration of the traffic mirroring action.
     *
     * @var trafficMirrorConfig
     */
    public $trafficMirrorConfig;

    /**
     * @description The action. Valid values:
     *
     *   **ForwardGroup**: distributes requests to multiple vServer groups.
     *   **Redirect**: redirects a request.
     *   **FixedResponse**: returns a custom response.
     *   **Rewrite**: rewrites a request.
     *   **InsertHeader**: inserts headers.
     *   **RemoveHeaderConfig:** deletes the header of a request.
     *   **TrafficLimit**: throttles traffic.
     *   **TrafficMirror**: mirrors network traffic.
     *   **Cors**: enables cross-origin resource sharing (CORS).
     *
     * The following action types are supported:
     *
     *   **FinalType**: Each forwarding rule can contain only one FinalType action, which is performed at the end. You can specify only one of **ForwardGroup**, **Redirect**, and **FixedResponse**.
     *   **ExtType**: Each forwarding rule can contain one or more **ExtType** actions, which are performed before the **FinalType** action. If you want to specify an ExtType action, you must also specify a **FinalType** action. You can specify multiple **InsertHeader** actions or one **Rewrite** action.
     *
     * This parameter is required.
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
