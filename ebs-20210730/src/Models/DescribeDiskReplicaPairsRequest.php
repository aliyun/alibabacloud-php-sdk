<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaPairsRequest extends Model
{
    /**
     * @description 分页查询时每页的最大条目数。取值范围：1~500
     *
     * 默认值：10
     * @var int
     */
    public $maxResults;

    /**
     * @description 查询凭证（Token）。取值为上一次调用该接口返回的NextToken参数值，初次调用接口时无需设置该参数。
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 异步复制关系ID列表。您可以指定一个或多个异步复制关系ID进行查询。格式为：pair-cn-dsa****,pair-cn-asd****。
     *
     * 默认值为空，表示查询当前地域下所有的异步复制关系。
     * @var string
     */
    public $pairIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description 所属复制组id。
     *
     * @var string
     */
    public $replicaGroupId;

    /**
     * @description production或backup，表示获取本地为主站点或备站点的复制对数据，默认为production。
     *
     * @var string
     */
    public $site;
    protected $_name = [
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'pairIds'        => 'PairIds',
        'regionId'       => 'RegionId',
        'replicaGroupId' => 'ReplicaGroupId',
        'site'           => 'Site',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pairIds) {
            $res['PairIds'] = $this->pairIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicaGroupId) {
            $res['ReplicaGroupId'] = $this->replicaGroupId;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskReplicaPairsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PairIds'])) {
            $model->pairIds = $map['PairIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicaGroupId'])) {
            $model->replicaGroupId = $map['ReplicaGroupId'];
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        return $model;
    }
}
