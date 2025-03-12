<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceDeployDetailsResponseBody\deployDetails;
use AlibabaCloud\Tea\Model;

class ListServiceInstanceDeployDetailsResponseBody extends Model
{
    /**
     * @description The details of the service instance deployment.
     *
     * @var deployDetails[]
     */
    public $deployDetails;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example AAAAAW8kZY+u1sYOaYf5JmgmDQQ=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 0036D82E-0624-5B37-B797-C460F4B02026
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 7
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'deployDetails' => 'DeployDetails',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployDetails) {
            $res['DeployDetails'] = [];
            if (null !== $this->deployDetails && \is_array($this->deployDetails)) {
                $n = 0;
                foreach ($this->deployDetails as $item) {
                    $res['DeployDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListServiceInstanceDeployDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployDetails'])) {
            if (!empty($map['DeployDetails'])) {
                $model->deployDetails = [];
                $n                    = 0;
                foreach ($map['DeployDetails'] as $item) {
                    $model->deployDetails[$n++] = null !== $item ? deployDetails::fromMap($item) : $item;
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
