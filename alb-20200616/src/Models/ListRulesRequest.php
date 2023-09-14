<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListRulesRequest extends Model
{
    /**
     * @description The direction to which the forwarding rule is applied. Valid values:
     *
     *   **Request** (default): The forwarding rule is applied to the client requests received by ALB.
     *   **Response**: The forwarding rule is applied to the responses returned by backend servers.
     *
     * > You cannot set this parameter to Response if you use basic ALB instances.
     * @example Request
     *
     * @var string
     */
    public $direction;

    /**
     * @description The listener IDs.
     *
     * @var string[]
     */
    public $listenerIds;

    /**
     * @description The Application Load Balancer (ALB) instance IDs.
     *
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @description The maximum number of entries to return.
     *
     * Valid values: **1 to 100**.
     *
     * Default value: **20**. If you do not specify this parameter, the default value is used.
     *
     * > This parameter is optional.
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The starting point of the current query. If you do not specify this parameter, the query starts from the beginning.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The forwarding rules.
     *
     * @var string[]
     */
    public $ruleIds;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'direction'       => 'Direction',
        'listenerIds'     => 'ListenerIds',
        'loadBalancerIds' => 'LoadBalancerIds',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'ruleIds'         => 'RuleIds',
        'tag'             => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->listenerIds) {
            $res['ListenerIds'] = $this->listenerIds;
        }
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = $this->loadBalancerIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['ListenerIds'])) {
            if (!empty($map['ListenerIds'])) {
                $model->listenerIds = $map['ListenerIds'];
            }
        }
        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = $map['LoadBalancerIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = $map['RuleIds'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
