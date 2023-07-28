<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListInstancePatchesRequest extends Model
{
    /**
     * @description The number of entries to return on each page.
     *
     * @example i-bp1jaxa2bs4bps7*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ
     *
     * @example The status of the patches that you want to query. If you do not set this parameter, patches are not filtered.
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example Installed
     *
     * @var string
     */
    public $patchStatuses;

    /**
     * @description The ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'patchStatuses' => 'PatchStatuses',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->patchStatuses) {
            $res['PatchStatuses'] = $this->patchStatuses;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancePatchesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PatchStatuses'])) {
            $model->patchStatuses = $map['PatchStatuses'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
