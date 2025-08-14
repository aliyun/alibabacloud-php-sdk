<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResourceRequest\ecIdAccountIds;

class QueryCostCenterResourceRequest extends Model
{
    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var string
     */
    public $nextToken;

    /**
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

    public function validate()
    {
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }

        if (null !== $this->ecIdAccountIds) {
            if (\is_array($this->ecIdAccountIds)) {
                $res['EcIdAccountIds'] = [];
                $n1 = 0;
                foreach ($this->ecIdAccountIds as $item1) {
                    $res['EcIdAccountIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }

        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n1 = 0;
                foreach ($map['EcIdAccountIds'] as $item1) {
                    $model->ecIdAccountIds[$n1] = ecIdAccountIds::fromMap($item1);
                    ++$n1;
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
