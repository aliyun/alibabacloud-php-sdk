<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesResponseBody\quotaApplicationTemplates;
use AlibabaCloud\Tea\Model;

class ListQuotaApplicationTemplatesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var quotaApplicationTemplates[]
     */
    public $quotaApplicationTemplates;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'                => 'MaxResults',
        'nextToken'                 => 'NextToken',
        'quotaApplicationTemplates' => 'QuotaApplicationTemplates',
        'requestId'                 => 'RequestId',
        'totalCount'                => 'TotalCount',
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
        if (null !== $this->quotaApplicationTemplates) {
            $res['QuotaApplicationTemplates'] = [];
            if (null !== $this->quotaApplicationTemplates && \is_array($this->quotaApplicationTemplates)) {
                $n = 0;
                foreach ($this->quotaApplicationTemplates as $item) {
                    $res['QuotaApplicationTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListQuotaApplicationTemplatesResponseBody
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
        if (isset($map['QuotaApplicationTemplates'])) {
            if (!empty($map['QuotaApplicationTemplates'])) {
                $model->quotaApplicationTemplates = [];
                $n                                = 0;
                foreach ($map['QuotaApplicationTemplates'] as $item) {
                    $model->quotaApplicationTemplates[$n++] = null !== $item ? quotaApplicationTemplates::fromMap($item) : $item;
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
