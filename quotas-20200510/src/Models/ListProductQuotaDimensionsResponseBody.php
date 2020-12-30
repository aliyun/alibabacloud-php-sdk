<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotaDimensionsResponseBody\quotaDimensions;
use AlibabaCloud\Tea\Model;

class ListProductQuotaDimensionsResponseBody extends Model
{
    /**
     * @var quotaDimensions[]
     */
    public $quotaDimensions;

    /**
     * @var int
     */
    public $totalCount;

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
        'quotaDimensions' => 'QuotaDimensions',
        'totalCount'      => 'TotalCount',
        'nextToken'       => 'NextToken',
        'requestId'       => 'RequestId',
        'maxResults'      => 'MaxResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaDimensions) {
            $res['QuotaDimensions'] = [];
            if (null !== $this->quotaDimensions && \is_array($this->quotaDimensions)) {
                $n = 0;
                foreach ($this->quotaDimensions as $item) {
                    $res['QuotaDimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
     * @return ListProductQuotaDimensionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaDimensions'])) {
            if (!empty($map['QuotaDimensions'])) {
                $model->quotaDimensions = [];
                $n                      = 0;
                foreach ($map['QuotaDimensions'] as $item) {
                    $model->quotaDimensions[$n++] = null !== $item ? quotaDimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
