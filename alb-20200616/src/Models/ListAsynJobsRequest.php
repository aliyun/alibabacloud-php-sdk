<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListAsynJobsRequest extends Model
{
    /**
     * @description 操作接口名
     *
     * @var string
     */
    public $apiName;

    /**
     * @description 任务过滤时间范围-开始时间
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description 任务过滤时间范围-结束时间
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 任务ID列表
     *
     * @var string[]
     */
    public $jobIds;

    /**
     * @description 本次读取的最大数据记录数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 下一个查询开始Token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 资源实例ID列表
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description 资源类型类型
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'apiName'      => 'ApiName',
        'beginTime'    => 'BeginTime',
        'endTime'      => 'EndTime',
        'jobIds'       => 'JobIds',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAsynJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = $map['JobIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
