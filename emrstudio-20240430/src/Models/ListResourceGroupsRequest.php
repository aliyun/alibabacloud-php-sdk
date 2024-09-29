<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Tea\Model;

class ListResourceGroupsRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 0
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example name
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @example CLUSTER_RESOURCE_GROUP
     *
     * @var string
     */
    public $resourceGroupType;

    /**
     * @description This parameter is required.
     *
     * @example w-lxyy60mpgpg****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'maxResults'        => 'maxResults',
        'nextToken'         => 'nextToken',
        'resourceGroupName' => 'resourceGroupName',
        'resourceGroupType' => 'resourceGroupType',
        'workspaceId'       => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceGroupName) {
            $res['resourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->resourceGroupType) {
            $res['resourceGroupType'] = $this->resourceGroupType;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['resourceGroupName'])) {
            $model->resourceGroupName = $map['resourceGroupName'];
        }
        if (isset($map['resourceGroupType'])) {
            $model->resourceGroupType = $map['resourceGroupType'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
