<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribePolicyGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $externalPolicyGroupIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'externalPolicyGroupIds' => 'ExternalPolicyGroupIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'policyGroupId' => 'PolicyGroupId',
        'regionId' => 'RegionId',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->externalPolicyGroupIds)) {
            Model::validateArray($this->externalPolicyGroupIds);
        }
        if (\is_array($this->policyGroupId)) {
            Model::validateArray($this->policyGroupId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalPolicyGroupIds) {
            if (\is_array($this->externalPolicyGroupIds)) {
                $res['ExternalPolicyGroupIds'] = [];
                $n1 = 0;
                foreach ($this->externalPolicyGroupIds as $item1) {
                    $res['ExternalPolicyGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyGroupId) {
            if (\is_array($this->policyGroupId)) {
                $res['PolicyGroupId'] = [];
                $n1 = 0;
                foreach ($this->policyGroupId as $item1) {
                    $res['PolicyGroupId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['ExternalPolicyGroupIds'])) {
            if (!empty($map['ExternalPolicyGroupIds'])) {
                $model->externalPolicyGroupIds = [];
                $n1 = 0;
                foreach ($map['ExternalPolicyGroupIds'] as $item1) {
                    $model->externalPolicyGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyGroupId'])) {
            if (!empty($map['PolicyGroupId'])) {
                $model->policyGroupId = [];
                $n1 = 0;
                foreach ($map['PolicyGroupId'] as $item1) {
                    $model->policyGroupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
