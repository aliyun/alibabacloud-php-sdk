<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class DescribeNodeGroupRefreshTaskShrinkRequest extends Model
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
     * @var string
     */
    public $nodeGroupRefreshTaskId;

    /**
     * @var string
     */
    public $nodeStatusesShrink;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeGroupRefreshTaskId' => 'NodeGroupRefreshTaskId',
        'nodeStatusesShrink' => 'NodeStatuses',
    ];

    public function validate()
    {
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

        if (null !== $this->nodeGroupRefreshTaskId) {
            $res['NodeGroupRefreshTaskId'] = $this->nodeGroupRefreshTaskId;
        }

        if (null !== $this->nodeStatusesShrink) {
            $res['NodeStatuses'] = $this->nodeStatusesShrink;
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

        if (isset($map['NodeGroupRefreshTaskId'])) {
            $model->nodeGroupRefreshTaskId = $map['NodeGroupRefreshTaskId'];
        }

        if (isset($map['NodeStatuses'])) {
            $model->nodeStatusesShrink = $map['NodeStatuses'];
        }

        return $model;
    }
}
