<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\ruleActions\forwardGroupConfig;
use AlibabaCloud\Tea\Model;

class ruleActions extends Model
{
    /**
     * @description The configuration of the forwarding action.
     *
     * >  For GA instances created after July 12, 2022, all forwarding condition types and forwarding action types are supported. We recommend that you call **RuleActionType** and **RuleActionValue** to query forwarding actions.
     * @var forwardGroupConfig
     */
    public $forwardGroupConfig;

    /**
     * @description The forwarding priority.
     *
     * >  This parameter does not take effect.
     * @example 1
     *
     * @var int
     */
    public $order;

    /**
     * @description The type of the forwarding action. Valid values:
     *
     *   **ForwardGroup**: forwards a request.
     *   **Redirect:** redirects a request.
     *   **FixResponse**: returns a fixed response.
     *   **Rewrite:** rewrites a request.
     *   **AddHeader**: adds a header to a request.
     *   **RemoveHeaderConfig**: deletes the header of a request.
     *
     * @example ForwardGroup
     *
     * @var string
     */
    public $ruleActionType;

    /**
     * @description The value of the forwarding action type.
     *
     * Different JSON strings are returned based on the **RuleActionType** parameter.
     *
     *   If **RuleActionType** is set to **ForwardGroup**, the information about a virtual endpoint group is returned. Configuration information:
     *
     *   `type`: the type of the resource that is returned. The value is `endpointgroup`.
     *   `value`: the ID of the virtual endpoint group that is returned.
     *
     *   If **RuleActionType** is set to **Redirect**, the redirect configuration is returned. Configuration information:
     *
     *   `protocol`: the protocol of requests after the requests are redirected.
     *   `domain`: the domain name to which requests are redirected.
     *   `port`: the port to which requests are redirected.
     *   `path`: the path to which requests are redirected.
     *   `query`: the query string to which requests are redirected.
     *   `code`: the redirect code.
     *
     *   If **RuleActionType** is set to **FixResponse**, the information about the fixed response that you configured is returned. Configuration information:
     *
     *   `code`: the HTTP status code that is returned.
     *   `type`: the type of the response content that is returned.
     *   `content`: the response content that is returned.
     *
     *   If **RuleActionType** is set to **AddHeader**, the information about the HTTP header that is added is returned. Configuration information:
     *
     *   `name`: the name of the HTTP header that is returned.
     *   `type`: the content type of the HTTP header that is returned.
     *   `value`: the content of the HTTP header that is returned.
     *
     *   If **RuleActionType** is set to **RemoveHeader**, the information about the HTTP header that is deleted is returned.
     *
     *   If **RuleActionType** is set to **Rewrite**, the rewrite configuration is returned. Configuration information:
     *
     *   `domain`: the domain name to which requests are redirected.
     *   `path`: the path to which requests are redirected.
     *   `query`: the query string to which requests are redirected.
     *
     * @example [{"type":"endpointgroup", "value":"epg-bp1enpdcrqhl78g6r****"}]
     *
     * @var string
     */
    public $ruleActionValue;
    protected $_name = [
        'forwardGroupConfig' => 'ForwardGroupConfig',
        'order'              => 'Order',
        'ruleActionType'     => 'RuleActionType',
        'ruleActionValue'    => 'RuleActionValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardGroupConfig) {
            $res['ForwardGroupConfig'] = null !== $this->forwardGroupConfig ? $this->forwardGroupConfig->toMap() : null;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->ruleActionType) {
            $res['RuleActionType'] = $this->ruleActionType;
        }
        if (null !== $this->ruleActionValue) {
            $res['RuleActionValue'] = $this->ruleActionValue;
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
        if (isset($map['ForwardGroupConfig'])) {
            $model->forwardGroupConfig = forwardGroupConfig::fromMap($map['ForwardGroupConfig']);
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['RuleActionType'])) {
            $model->ruleActionType = $map['RuleActionType'];
        }
        if (isset($map['RuleActionValue'])) {
            $model->ruleActionValue = $map['RuleActionValue'];
        }

        return $model;
    }
}
