<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListComponentsRequest extends Model
{
    /**
     * @description 应用名称列表。
     *
     * @example 20
     *
     * @var string[]
     */
    public $applicationNames;

    /**
     * @description 集群ID。
     *
     * This parameter is required.
     *
     * @example C-8CFEBCCFFEF5****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 组件名称列表。
     *
     * @example ["HDFS"]
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
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 标记当前开始读取的位置，置空表示从头开始。
     *
     * @example ""
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 地域ID。
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationNames' => 'ApplicationNames',
        'clusterId' => 'ClusterId',
        'componentNames' => 'ComponentNames',
        'componentStates' => 'ComponentStates',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListComponentsRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
