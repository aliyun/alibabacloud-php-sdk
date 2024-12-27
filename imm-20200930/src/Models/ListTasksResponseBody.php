<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListTasksResponseBody extends Model
{
    /**
     * @description The length of the returned result list.
     *
     * @example 1
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description The pagination token. The pagination token is used in the next request to retrieve a new page of results if the total number of results exceeds the value of the MaxResults parameter. This parameter has a value only when not all results are returned.
     *
     * You can specify the value of the NextToken parameter in the next request to list remaining results.
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The name of the project.
     *
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The request ID.
     *
     * @example 9847E7D0-A9A3-0053-84C6-BA16FFFA726E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tasks.
     *
     * @var TaskInfo[]
     */
    public $tasks;
    protected $_name = [
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'projectName' => 'ProjectName',
        'requestId'   => 'RequestId',
        'tasks'       => 'Tasks',
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
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['Tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTasksResponseBody
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? TaskInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
