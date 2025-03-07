<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSnapshotJobsResponseBody\jobs;
use AlibabaCloud\Tea\Model;

class ListSnapshotJobsResponseBody extends Model
{
    /**
     * @description The list of jobs.
     *
     * @var jobs[]
     */
    public $jobs;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobs'          => 'Jobs',
        'nextPageToken' => 'NextPageToken',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobs) {
            $res['Jobs'] = [];
            if (null !== $this->jobs && \is_array($this->jobs)) {
                $n = 0;
                foreach ($this->jobs as $item) {
                    $res['Jobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSnapshotJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Jobs'])) {
            if (!empty($map['Jobs'])) {
                $model->jobs = [];
                $n           = 0;
                foreach ($map['Jobs'] as $item) {
                    $model->jobs[$n++] = null !== $item ? jobs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
