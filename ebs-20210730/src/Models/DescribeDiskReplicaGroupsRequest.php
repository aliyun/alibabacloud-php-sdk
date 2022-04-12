<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $groupIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description production或backup，表示数据从主或备站点获取，默认为production。
     *
     * @var string
     */
    public $site;
    protected $_name = [
        'groupIds'   => 'GroupIds',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
        'site'       => 'Site',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
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
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskReplicaGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupIds'])) {
            $model->groupIds = $map['GroupIds'];
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
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        return $model;
    }
}
