<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationGroupsResponseBody\applicationGroups;
use AlibabaCloud\Tea\Model;

class ListApplicationGroupsResponseBody extends Model
{
    /**
     * @description The details of the application group.
     *
     * @var applicationGroups[]
     */
    public $applicationGroups;

    /**
     * @description The number of entries returned on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example -
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 69D97BF2-5DF2-544C-A650-36A474E17BC3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationGroups' => 'ApplicationGroups',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationGroups) {
            $res['ApplicationGroups'] = [];
            if (null !== $this->applicationGroups && \is_array($this->applicationGroups)) {
                $n = 0;
                foreach ($this->applicationGroups as $item) {
                    $res['ApplicationGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationGroups'])) {
            if (!empty($map['ApplicationGroups'])) {
                $model->applicationGroups = [];
                $n                        = 0;
                foreach ($map['ApplicationGroups'] as $item) {
                    $model->applicationGroups[$n++] = null !== $item ? applicationGroups::fromMap($item) : $item;
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

        return $model;
    }
}
