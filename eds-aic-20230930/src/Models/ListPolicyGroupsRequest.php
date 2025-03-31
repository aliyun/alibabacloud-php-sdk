<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ListPolicyGroupsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $policyGroupIds;

    /**
     * @var string
     */
    public $policyGroupName;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'policyGroupIds' => 'PolicyGroupIds',
        'policyGroupName' => 'PolicyGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->policyGroupIds)) {
            Model::validateArray($this->policyGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->policyGroupIds) {
            if (\is_array($this->policyGroupIds)) {
                $res['PolicyGroupIds'] = [];
                $n1 = 0;
                foreach ($this->policyGroupIds as $item1) {
                    $res['PolicyGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = [];
                $n1 = 0;
                foreach ($map['PolicyGroupIds'] as $item1) {
                    $model->policyGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }

        return $model;
    }
}
