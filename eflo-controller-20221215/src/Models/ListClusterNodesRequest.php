<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ListClusterNodesRequest extends Model
{
    /**
     * @example i15b480fbd2fcdbc2869cd80
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAdQ3Z+oPlg49gsr2y8jb6wY=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example ng-ec3c96ff0aa4c60d
     *
     * @var string
     */
    public $nodeGroupId;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'nodeGroupId' => 'NodeGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        return $model;
    }
}
