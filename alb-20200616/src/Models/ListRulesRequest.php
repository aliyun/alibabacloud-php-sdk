<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesRequest\tag;

class ListRulesRequest extends Model
{
    /**
     * @var string
     */
    public $direction;
    /**
     * @var string[]
     */
    public $listenerIds;
    /**
     * @var string[]
     */
    public $loadBalancerIds;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
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
        if (\is_array($this->listenerIds)) {
            Model::validateArray($this->listenerIds);
        }
        if (\is_array($this->loadBalancerIds)) {
            Model::validateArray($this->loadBalancerIds);
        }
        if (\is_array($this->ruleIds)) {
            Model::validateArray($this->ruleIds);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->listenerIds) {
            if (\is_array($this->listenerIds)) {
                $res['ListenerIds'] = [];
                $n1                 = 0;
                foreach ($this->listenerIds as $item1) {
                    $res['ListenerIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->loadBalancerIds) {
            if (\is_array($this->loadBalancerIds)) {
                $res['LoadBalancerIds'] = [];
                $n1                     = 0;
                foreach ($this->loadBalancerIds as $item1) {
                    $res['LoadBalancerIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->ruleIds) {
            if (\is_array($this->ruleIds)) {
                $res['RuleIds'] = [];
                $n1             = 0;
                foreach ($this->ruleIds as $item1) {
                    $res['RuleIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['ListenerIds'])) {
            if (!empty($map['ListenerIds'])) {
                $model->listenerIds = [];
                $n1                 = 0;
                foreach ($map['ListenerIds'] as $item1) {
                    $model->listenerIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = [];
                $n1                     = 0;
                foreach ($map['LoadBalancerIds'] as $item1) {
                    $model->loadBalancerIds[$n1++] = $item1;
                }
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
                $model->ruleIds = [];
                $n1             = 0;
                foreach ($map['RuleIds'] as $item1) {
                    $model->ruleIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
