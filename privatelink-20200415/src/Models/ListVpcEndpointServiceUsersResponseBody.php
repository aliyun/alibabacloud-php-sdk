<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceUsersResponseBody\userARNs;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServiceUsersResponseBody\users;

class ListVpcEndpointServiceUsersResponseBody extends Model
{
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
    public $requestId;
    /**
     * @var string
     */
    public $totalCount;
    /**
     * @var userARNs[]
     */
    public $userARNs;
    /**
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
        if (\is_array($this->userARNs)) {
            Model::validateArray($this->userARNs);
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->userARNs)) {
                $res['UserARNs'] = [];
                $n1              = 0;
                foreach ($this->userARNs as $item1) {
                    $res['UserARNs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1           = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1              = 0;
                foreach ($map['UserARNs'] as $item1) {
                    $model->userARNs[$n1++] = userARNs::fromMap($item1);
                }
            }
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1           = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1++] = users::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
