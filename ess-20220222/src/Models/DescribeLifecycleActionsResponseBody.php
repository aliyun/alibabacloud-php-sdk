<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleActionsResponseBody\lifecycleActions;

class DescribeLifecycleActionsResponseBody extends Model
{
    /**
     * @var lifecycleActions[]
     */
    public $lifecycleActions;
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
    public $totalCount;
    protected $_name = [
        'lifecycleActions' => 'LifecycleActions',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->lifecycleActions)) {
            Model::validateArray($this->lifecycleActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lifecycleActions) {
            if (\is_array($this->lifecycleActions)) {
                $res['LifecycleActions'] = [];
                $n1                      = 0;
                foreach ($this->lifecycleActions as $item1) {
                    $res['LifecycleActions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['LifecycleActions'])) {
            if (!empty($map['LifecycleActions'])) {
                $model->lifecycleActions = [];
                $n1                      = 0;
                foreach ($map['LifecycleActions'] as $item1) {
                    $model->lifecycleActions[$n1++] = lifecycleActions::fromMap($item1);
                }
            }
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
