<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsRequest;

use AlibabaCloud\Tea\Model;

class option extends Model
{
    /**
     * @var string[]
     */
    public $filterRoleIds;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 2
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'filterRoleIds' => 'FilterRoleIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterRoleIds) {
            $res['FilterRoleIds'] = $this->filterRoleIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return option
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterRoleIds'])) {
            if (!empty($map['FilterRoleIds'])) {
                $model->filterRoleIds = $map['FilterRoleIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
