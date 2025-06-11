<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUserProvisioningsResponseBody\userProvisionings;

class ListUserProvisioningsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isTruncated;

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
     * @var int
     */
    public $totalCounts;

    /**
     * @var userProvisionings[]
     */
    public $userProvisionings;
    protected $_name = [
        'isTruncated' => 'IsTruncated',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCounts' => 'TotalCounts',
        'userProvisionings' => 'UserProvisionings',
    ];

    public function validate()
    {
        if (\is_array($this->userProvisionings)) {
            Model::validateArray($this->userProvisionings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }

        if (null !== $this->userProvisionings) {
            if (\is_array($this->userProvisionings)) {
                $res['UserProvisionings'] = [];
                $n1 = 0;
                foreach ($this->userProvisionings as $item1) {
                    $res['UserProvisionings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        if (isset($map['UserProvisionings'])) {
            if (!empty($map['UserProvisionings'])) {
                $model->userProvisionings = [];
                $n1 = 0;
                foreach ($map['UserProvisionings'] as $item1) {
                    $model->userProvisionings[$n1++] = userProvisionings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
