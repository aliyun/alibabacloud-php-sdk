<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUserProvisioningsResponseBody\userProvisionings;
use AlibabaCloud\Tea\Model;

class ListUserProvisioningsResponseBody extends Model
{
    /**
     * @description Indicates whether the queried entries are truncated. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The maximum number of entries per page.
     *
     * Default value: 10.
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to initiate the next request.
     *
     * >  This parameter is returned only when the `IsTruncated` parameter is set to `true`.
     * @example 27EbL9j4ZgZjsMZFqbZFgbwQ1VXFU1Khcpx9e2vrW1zwzTBmTGWaM7ixHhRin8SCsxaJdazYVCzeKc2UF2QkyGb83cPhr8ZxrzoaiTd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example F76AF4FC-****-****-B7CB-74F3********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 110
     *
     * @var int
     */
    public $totalCounts;

    /**
     * @description The RAM user provisionings.
     *
     * @var userProvisionings[]
     */
    public $userProvisionings;
    protected $_name = [
        'isTruncated'       => 'IsTruncated',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'totalCounts'       => 'TotalCounts',
        'userProvisionings' => 'UserProvisionings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->userProvisionings) {
            $res['UserProvisionings'] = [];
            if (null !== $this->userProvisionings && \is_array($this->userProvisionings)) {
                $n = 0;
                foreach ($this->userProvisionings as $item) {
                    $res['UserProvisionings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserProvisioningsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['UserProvisionings'])) {
            if (!empty($map['UserProvisionings'])) {
                $model->userProvisionings = [];
                $n                        = 0;
                foreach ($map['UserProvisionings'] as $item) {
                    $model->userProvisionings[$n++] = null !== $item ? userProvisionings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
