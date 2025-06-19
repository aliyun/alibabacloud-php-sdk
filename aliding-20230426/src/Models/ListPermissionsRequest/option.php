<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListPermissionsRequest;

use AlibabaCloud\Dara\Model;

class option extends Model
{
    /**
     * @var string[]
     */
    public $filterRoleIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'filterRoleIds' => 'FilterRoleIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->filterRoleIds)) {
            Model::validateArray($this->filterRoleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterRoleIds) {
            if (\is_array($this->filterRoleIds)) {
                $res['FilterRoleIds'] = [];
                $n1 = 0;
                foreach ($this->filterRoleIds as $item1) {
                    $res['FilterRoleIds'][$n1] = $item1;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterRoleIds'])) {
            if (!empty($map['FilterRoleIds'])) {
                $model->filterRoleIds = [];
                $n1 = 0;
                foreach ($map['FilterRoleIds'] as $item1) {
                    $model->filterRoleIds[$n1] = $item1;
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

        return $model;
    }
}
