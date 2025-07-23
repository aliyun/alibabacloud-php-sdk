<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeMountPointsVscAttachInfoRequest\queryInfos;
use AlibabaCloud\Tea\Model;

class DescribeMountPointsVscAttachInfoRequest extends Model
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
     * @var queryInfos[]
     */
    public $queryInfos;

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
        'queryInfos' => 'QueryInfos',
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
        if (null !== $this->queryInfos) {
            $res['QueryInfos'] = [];
            if (null !== $this->queryInfos && \is_array($this->queryInfos)) {
                $n = 0;
                foreach ($this->queryInfos as $item) {
                    $res['QueryInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->useAssumeRoleChkServerPerm) {
            $res['UseAssumeRoleChkServerPerm'] = $this->useAssumeRoleChkServerPerm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMountPointsVscAttachInfoRequest
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
            if (!empty($map['QueryInfos'])) {
                $model->queryInfos = [];
                $n = 0;
                foreach ($map['QueryInfos'] as $item) {
                    $model->queryInfos[$n++] = null !== $item ? queryInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UseAssumeRoleChkServerPerm'])) {
            $model->useAssumeRoleChkServerPerm = $map['UseAssumeRoleChkServerPerm'];
        }

        return $model;
    }
}
