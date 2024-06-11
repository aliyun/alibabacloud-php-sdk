<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ListPolicyGroupsRequest extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kU+SQXzm0H9mu/FiSc****
     *
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
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'policyGroupIds'  => 'PolicyGroupIds',
        'policyGroupName' => 'PolicyGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->policyGroupIds) {
            $res['PolicyGroupIds'] = $this->policyGroupIds;
        }
        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyGroupsRequest
     */
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
                $model->policyGroupIds = $map['PolicyGroupIds'];
            }
        }
        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }

        return $model;
    }
}
