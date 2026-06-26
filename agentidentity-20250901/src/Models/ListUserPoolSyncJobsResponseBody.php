<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\ListUserPoolSyncJobsResponseBody\synchronizationJobs;

class ListUserPoolSyncJobsResponseBody extends Model
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
     * @var synchronizationJobs[]
     */
    public $synchronizationJobs;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'synchronizationJobs' => 'SynchronizationJobs',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->synchronizationJobs)) {
            Model::validateArray($this->synchronizationJobs);
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

        if (null !== $this->synchronizationJobs) {
            if (\is_array($this->synchronizationJobs)) {
                $res['SynchronizationJobs'] = [];
                $n1 = 0;
                foreach ($this->synchronizationJobs as $item1) {
                    $res['SynchronizationJobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SynchronizationJobs'])) {
            if (!empty($map['SynchronizationJobs'])) {
                $model->synchronizationJobs = [];
                $n1 = 0;
                foreach ($map['SynchronizationJobs'] as $item1) {
                    $model->synchronizationJobs[$n1] = synchronizationJobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
