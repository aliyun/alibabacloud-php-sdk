<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody\smartJobList;
use AlibabaCloud\Tea\Model;

class ListSmartJobsResponseBody extends Model
{
    /**
     * @description The maximum number of entries returned on a single page. The value is set to the maximum number of entries returned on each page except for the last page. Valid example: 10,10,5. Invalid example: 10,5,10.
     *
     * @example 10
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example CBB6BC61D08
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example ****9262E3DA-07FA-4862-FCBB6BC61D08*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried intelligent jobs.
     *
     * @var smartJobList[]
     */
    public $smartJobList;

    /**
     * @description Optional. The total number of entries returned. By default, this parameter is not returned.
     *
     * @example 110
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'smartJobList' => 'SmartJobList',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->smartJobList) {
            $res['SmartJobList'] = [];
            if (null !== $this->smartJobList && \is_array($this->smartJobList)) {
                $n = 0;
                foreach ($this->smartJobList as $item) {
                    $res['SmartJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSmartJobsResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SmartJobList'])) {
            if (!empty($map['SmartJobList'])) {
                $model->smartJobList = [];
                $n                   = 0;
                foreach ($map['SmartJobList'] as $item) {
                    $model->smartJobList[$n++] = null !== $item ? smartJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
