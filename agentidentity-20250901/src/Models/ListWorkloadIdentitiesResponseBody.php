<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListWorkloadIdentitiesResponseBody\workloadIdentities;

class ListWorkloadIdentitiesResponseBody extends Model
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
     * @var int
     */
    public $totalCount;

    /**
     * @var workloadIdentities[]
     */
    public $workloadIdentities;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'workloadIdentities' => 'WorkloadIdentities',
    ];

    public function validate()
    {
        if (\is_array($this->workloadIdentities)) {
            Model::validateArray($this->workloadIdentities);
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

        if (null !== $this->workloadIdentities) {
            if (\is_array($this->workloadIdentities)) {
                $res['WorkloadIdentities'] = [];
                $n1 = 0;
                foreach ($this->workloadIdentities as $item1) {
                    $res['WorkloadIdentities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['WorkloadIdentities'])) {
            if (!empty($map['WorkloadIdentities'])) {
                $model->workloadIdentities = [];
                $n1 = 0;
                foreach ($map['WorkloadIdentities'] as $item1) {
                    $model->workloadIdentities[$n1] = workloadIdentities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
