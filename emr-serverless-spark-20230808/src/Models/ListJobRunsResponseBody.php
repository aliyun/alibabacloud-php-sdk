<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsResponseBody\jobRuns;

class ListJobRunsResponseBody extends Model
{
    /**
     * @var jobRuns[]
     */
    public $jobRuns;

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
        'jobRuns' => 'jobRuns',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->jobRuns)) {
            Model::validateArray($this->jobRuns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobRuns) {
            if (\is_array($this->jobRuns)) {
                $res['jobRuns'] = [];
                $n1 = 0;
                foreach ($this->jobRuns as $item1) {
                    $res['jobRuns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['jobRuns'])) {
            if (!empty($map['jobRuns'])) {
                $model->jobRuns = [];
                $n1 = 0;
                foreach ($map['jobRuns'] as $item1) {
                    $model->jobRuns[$n1++] = jobRuns::fromMap($item1);
                }
            }
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
