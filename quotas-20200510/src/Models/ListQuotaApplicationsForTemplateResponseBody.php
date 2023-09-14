<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsForTemplateResponseBody\quotaBatchApplications;
use AlibabaCloud\Tea\Model;

class ListQuotaApplicationsForTemplateResponseBody extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var quotaBatchApplications[]
     */
    public $quotaBatchApplications;

    /**
     * @example D47B3A10-CDAC-5412-B2EE-EC9A3DBE9053
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 67
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'quotaBatchApplications' => 'QuotaBatchApplications',
        'requestId'              => 'RequestId',
        'totalCount'             => 'TotalCount',
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
        if (null !== $this->quotaBatchApplications) {
            $res['QuotaBatchApplications'] = [];
            if (null !== $this->quotaBatchApplications && \is_array($this->quotaBatchApplications)) {
                $n = 0;
                foreach ($this->quotaBatchApplications as $item) {
                    $res['QuotaBatchApplications'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListQuotaApplicationsForTemplateResponseBody
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
        if (isset($map['QuotaBatchApplications'])) {
            if (!empty($map['QuotaBatchApplications'])) {
                $model->quotaBatchApplications = [];
                $n                             = 0;
                foreach ($map['QuotaBatchApplications'] as $item) {
                    $model->quotaBatchApplications[$n++] = null !== $item ? quotaBatchApplications::fromMap($item) : $item;
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
