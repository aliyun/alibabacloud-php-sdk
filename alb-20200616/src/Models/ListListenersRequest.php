<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersRequest\tag;
use AlibabaCloud\Tea\Model;

class ListListenersRequest extends Model
{
    /**
     * @description The listener IDs. You can specify up to 20 IDs.
     *
     * @var string[]
     */
    public $listenerIds;

    /**
     * @description The listener protocol. Valid values:
     *
     *   **HTTP**
     *   **HTTPS**
     *   **QUIC**
     *
     * @example HTTP
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the Application Load Balancer (ALB) instance. You can specify at most 20 IDs.
     *
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @description The maximum number of entries to return. This parameter is optional. Valid values: **1 to 100**. If you do not specify this parameter, the default value **20** is used.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'listenerIds'      => 'ListenerIds',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalancerIds'  => 'LoadBalancerIds',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerIds) {
            $res['ListenerIds'] = $this->listenerIds;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
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
     * @return ListListenersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerIds'])) {
            if (!empty($map['ListenerIds'])) {
                $model->listenerIds = $map['ListenerIds'];
            }
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
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
