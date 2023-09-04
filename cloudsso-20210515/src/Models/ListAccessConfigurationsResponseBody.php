<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationsResponseBody\accessConfigurations;
use AlibabaCloud\Tea\Model;

class ListAccessConfigurationsResponseBody extends Model
{
    /**
     * @description The access configurations.
     *
     * @var accessConfigurations[]
     */
    public $accessConfigurations;

    /**
     * @description Indicates whether the queried entries are truncated. Valid values:
     *
     *   true: The queried entries are truncated.
     *   false: The queried entries are not truncated.
     *
     * @example false
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is returned for the next page.
     *
     * >  This parameter is returned only when the `IsTruncated` parameter is set to `true`.
     * @example K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 2BC0CBAC-45E1-5BD3-BF6E-F69D1D5391C2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'accessConfigurations' => 'AccessConfigurations',
        'isTruncated'          => 'IsTruncated',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCounts'          => 'TotalCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurations) {
            $res['AccessConfigurations'] = [];
            if (null !== $this->accessConfigurations && \is_array($this->accessConfigurations)) {
                $n = 0;
                foreach ($this->accessConfigurations as $item) {
                    $res['AccessConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
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
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessConfigurationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurations'])) {
            if (!empty($map['AccessConfigurations'])) {
                $model->accessConfigurations = [];
                $n                           = 0;
                foreach ($map['AccessConfigurations'] as $item) {
                    $model->accessConfigurations[$n++] = null !== $item ? accessConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
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
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}
