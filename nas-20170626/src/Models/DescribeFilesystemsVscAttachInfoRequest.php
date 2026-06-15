<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsVscAttachInfoRequest\resourceIds;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesystemsVscAttachInfoRequest\roleChain;

class DescribeFilesystemsVscAttachInfoRequest extends Model
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
     * @var resourceIds[]
     */
    public $resourceIds;

    /**
     * @var roleChain[]
     */
    public $roleChain;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceIds' => 'ResourceIds',
        'roleChain' => 'RoleChain',
    ];

    public function validate()
    {
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        if (\is_array($this->roleChain)) {
            Model::validateArray($this->roleChain);
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

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roleChain) {
            if (\is_array($this->roleChain)) {
                $res['RoleChain'] = [];
                $n1 = 0;
                foreach ($this->roleChain as $item1) {
                    $res['RoleChain'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1] = resourceIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RoleChain'])) {
            if (!empty($map['RoleChain'])) {
                $model->roleChain = [];
                $n1 = 0;
                foreach ($map['RoleChain'] as $item1) {
                    $model->roleChain[$n1] = roleChain::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
