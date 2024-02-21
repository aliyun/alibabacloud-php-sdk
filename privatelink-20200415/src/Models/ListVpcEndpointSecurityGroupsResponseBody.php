<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointSecurityGroupsResponseBody\securityGroups;
use AlibabaCloud\Tea\Model;

class ListVpcEndpointSecurityGroupsResponseBody extends Model
{
    /**
     * @description The number of entries returned per page.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The returned value of NextToken is a pagination token, which can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If no value is returned for **NextToken**, no next requests are performed.
     *   If a value is returned for **NextToken**, the value can be used in the next request to retrieve a new page of results.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the security groups.
     *
     * @var securityGroups[]
     */
    public $securityGroups;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'securityGroups' => 'SecurityGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = [];
            if (null !== $this->securityGroups && \is_array($this->securityGroups)) {
                $n = 0;
                foreach ($this->securityGroups as $item) {
                    $res['SecurityGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcEndpointSecurityGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroups'])) {
            if (!empty($map['SecurityGroups'])) {
                $model->securityGroups = [];
                $n                     = 0;
                foreach ($map['SecurityGroups'] as $item) {
                    $model->securityGroups[$n++] = null !== $item ? securityGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
