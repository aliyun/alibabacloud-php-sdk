<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResourceRequest\ecIdAccountIds;
use AlibabaCloud\Tea\Model;

class QueryCostCenterResourceRequest extends Model
{
    /**
     * @example 123456
     *
     * @var int
     */
    public $costCenterId;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @example 200
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 2684201000001
     *
     * @var string
     */
    public $nbid;

    /**
     * @example CAESEgoQCg4KCmd
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 1234567812345678
     *
     * @var int
     */
    public $ownerAccountId;
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'maxResults' => 'MaxResults',
        'nbid' => 'Nbid',
        'nextToken' => 'NextToken',
        'ownerAccountId' => 'OwnerAccountId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }
        if (null !== $this->ecIdAccountIds) {
            $res['EcIdAccountIds'] = [];
            if (null !== $this->ecIdAccountIds && \is_array($this->ecIdAccountIds)) {
                $n = 0;
                foreach ($this->ecIdAccountIds as $item) {
                    $res['EcIdAccountIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCostCenterResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }
        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n = 0;
                foreach ($map['EcIdAccountIds'] as $item) {
                    $model->ecIdAccountIds[$n++] = null !== $item ? ecIdAccountIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        return $model;
    }
}
