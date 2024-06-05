<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class GetListenerHealthStatusRequest extends Model
{
    /**
     * @description Specifies whether to return the health check results of forwarding rules. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $includeRule;

    /**
     * @description The listener ID.
     *
     * This parameter is required.
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **30**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query. Valid values:
     *
     *   If this is your first query or no next queries are to be sent, ignore this parameter.
     *   If a next query is to be sent, set the value to the value of **NextToken** that is returned from the last call.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'includeRule' => 'IncludeRule',
        'listenerId'  => 'ListenerId',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includeRule) {
            $res['IncludeRule'] = $this->includeRule;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetListenerHealthStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncludeRule'])) {
            $model->includeRule = $map['IncludeRule'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
