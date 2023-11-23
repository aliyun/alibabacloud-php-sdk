<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsDetailForTemplateResponseBody\quotaApplications;
use AlibabaCloud\Tea\Model;

class ListQuotaApplicationsDetailForTemplateResponseBody extends Model
{
    /**
     * @description The maximum number of records that can be returned for the query.
     *
     * @example 30
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that marks the position from which you want to start the query.
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The details of the quota increase application.
     *
     * @var quotaApplications[]
     */
    public $quotaApplications;

    /**
     * @description The request ID.
     *
     * @example D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of records that are returned for the query.
     *
     * @example 9
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'quotaApplications' => 'QuotaApplications',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
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
        if (null !== $this->quotaApplications) {
            $res['QuotaApplications'] = [];
            if (null !== $this->quotaApplications && \is_array($this->quotaApplications)) {
                $n = 0;
                foreach ($this->quotaApplications as $item) {
                    $res['QuotaApplications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListQuotaApplicationsDetailForTemplateResponseBody
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
        if (isset($map['QuotaApplications'])) {
            if (!empty($map['QuotaApplications'])) {
                $model->quotaApplications = [];
                $n                        = 0;
                foreach ($map['QuotaApplications'] as $item) {
                    $model->quotaApplications[$n++] = null !== $item ? quotaApplications::fromMap($item) : $item;
                }
            }
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
