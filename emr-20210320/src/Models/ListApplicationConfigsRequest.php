<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationConfigsRequest extends Model
{
    /**
     * @description The name of the application.
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The cluster ID.
     *
     * @example c-e6a9d46e9267****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the configuration file.
     *
     * @example hdfs-site.xml
     *
     * @var string
     */
    public $configFileName;

    /**
     * @description The name of the configuration item.
     *
     * @example dfs.replication
     *
     * @var string
     */
    public $configItemKey;

    /**
     * @description The value of the configuration item.
     *
     * @example 2
     *
     * @var string
     */
    public $configItemValue;

    /**
     * @description The number of entries per page.
     *
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The page number of the next page returned.
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the node group.
     *
     * @example ng-d555335ced5c****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description The node ID.
     *
     * @example i-bp10h9rezawz1i4o****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'clusterId'       => 'ClusterId',
        'configFileName'  => 'ConfigFileName',
        'configItemKey'   => 'ConfigItemKey',
        'configItemValue' => 'ConfigItemValue',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'nodeGroupId'     => 'NodeGroupId',
        'nodeId'          => 'NodeId',
        'regionId'        => 'RegionId',
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
        if (null !== $this->configFileName) {
            $res['ConfigFileName'] = $this->configFileName;
        }
        if (null !== $this->configItemKey) {
            $res['ConfigItemKey'] = $this->configItemKey;
        }
        if (null !== $this->configItemValue) {
            $res['ConfigItemValue'] = $this->configItemValue;
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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationConfigsRequest
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
        if (isset($map['ConfigFileName'])) {
            $model->configFileName = $map['ConfigFileName'];
        }
        if (isset($map['ConfigItemKey'])) {
            $model->configItemKey = $map['ConfigItemKey'];
        }
        if (isset($map['ConfigItemValue'])) {
            $model->configItemValue = $map['ConfigItemValue'];
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
