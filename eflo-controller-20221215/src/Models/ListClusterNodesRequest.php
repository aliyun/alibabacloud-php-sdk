<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ListClusterNodesRequest extends Model
{
    /**
     * @description Cluster ID
     *
     * This parameter is required.
     * @example i15b480fbd2fcdbc2869cd80
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Number of items per page in a paginated query, with a default value of 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Query token (Token), which is the value of the NextToken parameter returned by the previous API call.
     *
     * @example AAAAAdQ3Z+oPlg49gsr2y8jb6wY=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Node group ID
     *
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
