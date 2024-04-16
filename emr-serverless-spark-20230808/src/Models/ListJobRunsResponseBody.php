<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobRunsResponseBody\jobRuns;
use AlibabaCloud\Tea\Model;

class ListJobRunsResponseBody extends Model
{
    /**
     * @var jobRuns[]
     */
    public $jobRuns;

    /**
     * @description 本次请求所返回的最大记录条数。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 返回读取到的数据位置，空代表数据已经读取完毕。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 请求ID。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 本次请求条件下的数据总量。
     *
     * @example 200
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'jobRuns'    => 'jobRuns',
        'maxResults' => 'maxResults',
        'nextToken'  => 'nextToken',
        'requestId'  => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobRuns) {
            $res['jobRuns'] = [];
            if (null !== $this->jobRuns && \is_array($this->jobRuns)) {
                $n = 0;
                foreach ($this->jobRuns as $item) {
                    $res['jobRuns'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListJobRunsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jobRuns'])) {
            if (!empty($map['jobRuns'])) {
                $model->jobRuns = [];
                $n              = 0;
                foreach ($map['jobRuns'] as $item) {
                    $model->jobRuns[$n++] = null !== $item ? jobRuns::fromMap($item) : $item;
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
