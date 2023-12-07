<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListComponentInstancesRequest extends Model
{
    /**
     * @description 应用名称列表。
     *
     * @example ["HDFS"]
     *
     * @var string[]
     */
    public $applicationNames;

    /**
     * @description 集群ID。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 组件名称列表。
     *
     * @example ["DataNode"]
     *
     * @var string[]
     */
    public $componentNames;

    /**
     * @example null
     *
     * @var string[]
     */
    public $componentStates;

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
     * @description 节点ID列表。
     *
     * @example ["i-bp1cudc25w2bfwl5****"]
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationNames' => 'ApplicationNames',
        'clusterId'        => 'ClusterId',
        'componentNames'   => 'ComponentNames',
        'componentStates'  => 'ComponentStates',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'nodeIds'          => 'NodeIds',
        'nodeNames'        => 'NodeNames',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationNames) {
            $res['ApplicationNames'] = $this->applicationNames;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->componentNames) {
            $res['ComponentNames'] = $this->componentNames;
        }
        if (null !== $this->componentStates) {
            $res['ComponentStates'] = $this->componentStates;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListComponentInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationNames'])) {
            if (!empty($map['ApplicationNames'])) {
                $model->applicationNames = $map['ApplicationNames'];
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComponentNames'])) {
            if (!empty($map['ComponentNames'])) {
                $model->componentNames = $map['ComponentNames'];
            }
        }
        if (isset($map['ComponentStates'])) {
            if (!empty($map['ComponentStates'])) {
                $model->componentStates = $map['ComponentStates'];
            }
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

        return $model;
    }
}
