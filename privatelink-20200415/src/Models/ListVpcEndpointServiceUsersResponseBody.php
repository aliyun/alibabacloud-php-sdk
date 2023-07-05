<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceUsersResponseBody\userARNs;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceUsersResponseBody\users;
use AlibabaCloud\Tea\Model;

class ListVpcEndpointServiceUsersResponseBody extends Model
{
    /**
     * @description The number of entries returned on each page.
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
     * @var string
     */
    public $totalCount;

    /**
     * @description The whitelists in the format of Aliyun Resource Name (ARN).
     *
     * @var userARNs[]
     */
    public $userARNs;

    /**
     * @description The Alibaba Cloud accounts in the whitelist of the endpoint service.
     *
     * @var users[]
     */
    public $users;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'userARNs'   => 'UserARNs',
        'users'      => 'Users',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->userARNs) {
            $res['UserARNs'] = [];
            if (null !== $this->userARNs && \is_array($this->userARNs)) {
                $n = 0;
                foreach ($this->userARNs as $item) {
                    $res['UserARNs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcEndpointServiceUsersResponseBody
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UserARNs'])) {
            if (!empty($map['UserARNs'])) {
                $model->userARNs = [];
                $n               = 0;
                foreach ($map['UserARNs'] as $item) {
                    $model->userARNs[$n++] = null !== $item ? userARNs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? users::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
