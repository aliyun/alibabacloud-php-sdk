<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListClustersRequest extends Model
{
    /**
     * @description The IDs of the clusters. You can specify a maximum of 100 items.
     *
     * @example rg-acfmzabjyop****
     *
     * @var string[]
     */
    public $clusterIds;

    /**
     * @description The name of the cluster.
     *
     * @example emrtest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The states of clusters. You can specify a maximum of 100 items.
     *
     * @example ["HADOOP"]
     *
     * @var string[]
     */
    public $clusterStates;

    /**
     * @description The types of the clusters. You can specify a maximum of 100 items.
     *
     * @example ["c-b933c5aac8fe****"]
     *
     * @var string[]
     */
    public $clusterTypes;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The starting point of the current query. If you do not configure this parameter, the query starts from the beginning.
     *
     * @example eyJlY21OZXh0VG9rZW4iOiIxIiwidGFpaGFvTmV4dFRva2VuIjoiNTYiLCJ0YWloYW9OZXh0VG9rZW5JbnQiOjU2LCJlY21OZXh0VG9rZW5JbnQiOjF9
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The billing methods. You can specify a maximum of 2 items.
     *
     * @example ["ECS"]
     *
     * @var string[]
     */
    public $paymentTypes;

    /**
     * @description The region ID.
     *
     * Valid values:
     *
     *   center
     *   cn-hangzhou
     *   cn-shanghai
     *   cn-qingdao
     *   cn-beijing
     *   cn-zhangjiakou
     *   cn-huhehaote
     *   cn-wulanchabu
     *   cn-shenzhen
     *   cn-chengdu
     *   cn-hongkong
     *   ap-southeast-1
     *   ap-southeast-2
     *   ap-southeast-3
     *   ap-southeast-5
     *   ap-northeast-1
     *   eu-central-1
     *   eu-west-1
     *   us-west-1
     *   us-east-1
     *   ap-south-1
     *   me-east-1
     *   me-central-1
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmzabjyop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags. You can specify a maximum of 20 items.
     *
     * @example ["PayAsYouGo"]
     *
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'clusterIds'      => 'ClusterIds',
        'clusterName'     => 'ClusterName',
        'clusterStates'   => 'ClusterStates',
        'clusterTypes'    => 'ClusterTypes',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'paymentTypes'    => 'PaymentTypes',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterStates) {
            $res['ClusterStates'] = $this->clusterStates;
        }
        if (null !== $this->clusterTypes) {
            $res['ClusterTypes'] = $this->clusterTypes;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->paymentTypes) {
            $res['PaymentTypes'] = $this->paymentTypes;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = $map['ClusterIds'];
            }
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterStates'])) {
            if (!empty($map['ClusterStates'])) {
                $model->clusterStates = $map['ClusterStates'];
            }
        }
        if (isset($map['ClusterTypes'])) {
            if (!empty($map['ClusterTypes'])) {
                $model->clusterTypes = $map['ClusterTypes'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PaymentTypes'])) {
            if (!empty($map['PaymentTypes'])) {
                $model->paymentTypes = $map['PaymentTypes'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
