<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListResourceHealthInspectionsRequest extends Model
{
    /**
     * @description 应用名称。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 集群ID。
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 组件名称。
     *
     * @example DataNode
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 健康状态。
     *
     * @example ["BAD"]
     *
     * @var string[]
     */
    public $healthStatuses;

    /**
     * @description 语言
     *
     * @var string
     */
    public $language;

    /**
     * @description 一次获取的最大记录数。取值范围：1~100。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 标记当前开始读取的位置，置空表示从头开始。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 节点Id列表。
     *
     * @example ["i-bp14l5n4v46uxsscl033"]
     *
     * @var string[]
     */
    public $nodeIds;

    /**
     * @description 节点名称列表。
     *
     * @example ["core1-1"]
     *
     * @var string[]
     */
    public $nodeNames;

    /**
     * @description 地域ID。
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 查询的目标资源类型，合法值：
     * <p>
     * @example APPLICATION
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'clusterId'       => 'ClusterId',
        'componentName'   => 'ComponentName',
        'healthStatuses'  => 'HealthStatuses',
        'language'        => 'Language',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'nodeIds'         => 'NodeIds',
        'nodeNames'       => 'NodeNames',
        'regionId'        => 'RegionId',
        'resourceType'    => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->healthStatuses) {
            $res['HealthStatuses'] = $this->healthStatuses;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceHealthInspectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['HealthStatuses'])) {
            if (!empty($map['HealthStatuses'])) {
                $model->healthStatuses = $map['HealthStatuses'];
            }
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['NodeNames'])) {
            if (!empty($map['NodeNames'])) {
                $model->nodeNames = $map['NodeNames'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
