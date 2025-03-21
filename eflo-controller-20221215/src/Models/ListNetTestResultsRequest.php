<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ListNetTestResultsRequest extends Model
{
    /**
     * @description Number of items per page in a paginated query. The maximum value is 100.
     *
     * Default value:
     *
     * - If no value is set or the set value is less than 20, the default is 20.
     *
     * - If the set value is greater than 100, the default is 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Type of network test.
     *
     * @example DelayTest
     *
     * @var string
     */
    public $netTestType;

    /**
     * @description Query token (Token), which should be the value of the NextToken parameter returned from the previous API call.
     *
     * @example 3a6b93229825ac667104463b56790c91
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Resource group ID
     *
     * @example rg-acfmxno4vh5muoq
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'netTestType' => 'NetTestType',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->netTestType) {
            $res['NetTestType'] = $this->netTestType;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNetTestResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetTestType'])) {
            $model->netTestType = $map['NetTestType'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
