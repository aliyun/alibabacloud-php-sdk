<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class DescribeMountPointsVscAttachInfoShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example MYR6sz6qkmauspAy8oxjHP-tOLtD4KSv3DzI7G6iywTx1ZCExO50GtSuiTB9z0JppvYQ2iUa8s4HbcFanMQfDIlds4da87_Ax4UJMva****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $queryInfosShrink;

    /**
     * @example false
     *
     * @var bool
     */
    public $useAssumeRoleChkServerPerm;
    protected $_name = [
        'inputRegionId' => 'InputRegionId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'queryInfosShrink' => 'QueryInfos',
        'useAssumeRoleChkServerPerm' => 'UseAssumeRoleChkServerPerm',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->queryInfosShrink) {
            $res['QueryInfos'] = $this->queryInfosShrink;
        }
        if (null !== $this->useAssumeRoleChkServerPerm) {
            $res['UseAssumeRoleChkServerPerm'] = $this->useAssumeRoleChkServerPerm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMountPointsVscAttachInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['QueryInfos'])) {
            $model->queryInfosShrink = $map['QueryInfos'];
        }
        if (isset($map['UseAssumeRoleChkServerPerm'])) {
            $model->useAssumeRoleChkServerPerm = $map['UseAssumeRoleChkServerPerm'];
        }

        return $model;
    }
}
