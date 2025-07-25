<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamsResponseBody\ipams;
use AlibabaCloud\Tea\Model;

class ListIpamsResponseBody extends Model
{
    /**
     * @description The number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The IPAMs.
     *
     * @var ipams[]
     */
    public $ipams;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, no next page exists.
     *   If a value of **NextToken** is returned, the value indicates the token that is used for the next query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 23CA0A0B-B0F5-5495-B355-7D9A9203A46B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count' => 'Count',
        'ipams' => 'Ipams',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ipams) {
            $res['Ipams'] = [];
            if (null !== $this->ipams && \is_array($this->ipams)) {
                $n = 0;
                foreach ($this->ipams as $item) {
                    $res['Ipams'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListIpamsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Ipams'])) {
            if (!empty($map['Ipams'])) {
                $model->ipams = [];
                $n = 0;
                foreach ($map['Ipams'] as $item) {
                    $model->ipams[$n++] = null !== $item ? ipams::fromMap($item) : $item;
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
