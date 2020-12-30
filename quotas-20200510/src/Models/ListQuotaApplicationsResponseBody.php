<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsResponseBody\quotaApplications;
use AlibabaCloud\Tea\Model;

class ListQuotaApplicationsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var quotaApplications[]
     */
    public $quotaApplications;

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
    public $maxResults;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'quotaApplications' => 'QuotaApplications',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'maxResults'        => 'MaxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotaApplicationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        return $model;
    }
}
