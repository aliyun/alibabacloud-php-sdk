<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListListenersRequest\tag;

class ListListenersRequest extends Model
{
    /**
     * @var string[]
     */
    public $listenerIds;

    /**
     * @var string
     */
    public $listenerProtocol;

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
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $secSensorEnabled;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'listenerIds' => 'ListenerIds',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalancerIds' => 'LoadBalancerIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'secSensorEnabled' => 'SecSensorEnabled',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->listenerIds)) {
            Model::validateArray($this->listenerIds);
        }
        if (\is_array($this->loadBalancerIds)) {
            Model::validateArray($this->loadBalancerIds);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listenerIds) {
            if (\is_array($this->listenerIds)) {
                $res['ListenerIds'] = [];
                $n1 = 0;
                foreach ($this->listenerIds as $item1) {
                    $res['ListenerIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }

        if (null !== $this->loadBalancerIds) {
            if (\is_array($this->loadBalancerIds)) {
                $res['LoadBalancerIds'] = [];
                $n1 = 0;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->secSensorEnabled) {
            $res['SecSensorEnabled'] = $this->secSensorEnabled;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
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
        if (isset($map['ListenerIds'])) {
            if (!empty($map['ListenerIds'])) {
                $model->listenerIds = [];
                $n1 = 0;
                foreach ($map['ListenerIds'] as $item1) {
                    $model->listenerIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }

        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = [];
                $n1 = 0;
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecSensorEnabled'])) {
            $model->secSensorEnabled = $map['SecSensorEnabled'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
