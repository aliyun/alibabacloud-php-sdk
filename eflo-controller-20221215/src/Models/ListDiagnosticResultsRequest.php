<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ListDiagnosticResultsRequest extends Model
{
    /**
     * @description Type of diagnosis, indicating which diagnostic rules are hit.
     *
     * @example NetDiag
     *
     * @var string
     */
    public $diagType;

    /**
     * @description Number of items per page in a paginated query. The maximum value is 100.
     *
     * Default value:
     *
     * - If no value is set or the set value is less than 20, the default value is 20.
     * - If the set value is greater than 100, the default value is 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description NextToken for the next page. Include this value when requesting the next page.
     *
     * @example a3f2224a5ec7224116c4f5246120abe4
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmywpvugkh7kq
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'diagType' => 'DiagType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagType) {
            $res['DiagType'] = $this->diagType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
     * @return ListDiagnosticResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagType'])) {
            $model->diagType = $map['DiagType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
