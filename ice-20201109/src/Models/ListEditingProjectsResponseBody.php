<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListEditingProjectsResponseBody\projectList;
use AlibabaCloud\Tea\Model;

class ListEditingProjectsResponseBody extends Model
{
    /**
     * @description The maximum number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * This parameter is required.
     * @example Nzv3rcKla9wHUGua9YXHNA==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The queried online editing projects.
     *
     * @var projectList[]
     */
    public $projectList;

    /**
     * @description The request ID.
     *
     * @example *****ACB-44F2-5F2D-88D7-1283E70*****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'projectList' => 'ProjectList',
        'requestId'   => 'RequestId',
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
        if (null !== $this->projectList) {
            $res['ProjectList'] = [];
            if (null !== $this->projectList && \is_array($this->projectList)) {
                $n = 0;
                foreach ($this->projectList as $item) {
                    $res['ProjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEditingProjectsResponseBody
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
        if (isset($map['ProjectList'])) {
            if (!empty($map['ProjectList'])) {
                $model->projectList = [];
                $n                  = 0;
                foreach ($map['ProjectList'] as $item) {
                    $model->projectList[$n++] = null !== $item ? projectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
