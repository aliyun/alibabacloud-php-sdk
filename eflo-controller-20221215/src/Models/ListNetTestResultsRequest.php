<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ListNetTestResultsRequest extends Model
{
    /**
     * @description The number of entries to return on each page. Maximum value: 100.
     *
     * Default value:
     *
     *   If you do not configure this parameter or if you set this parameter to a value less than 20, the default value is 20.
     *   If you set this parameter to a value that is greater than 100, the default value is 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The type of the network test.
     *
     * @example DelayTest
     *
     * @var string
     */
    public $netTestType;

    /**
     * @description The token that determines the start position of the query. Set this parameter to the value of the NextToken parameter that is returned from the last call.
     *
     * @example 3a6b93229825ac667104463b56790c91
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The resource group ID.
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
