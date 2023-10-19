<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoriesResponseBody\apiHisItems;

use AlibabaCloud\Tea\Model;

class apiHisItem extends Model
{
    /**
     * @description The ID of the API.
     *
     * @example 5af418828f0344a3b588c0cc1331a3bc
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The name of the API.
     *
     * @example CreateObject
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The publishing time (UTC) of the API.
     *
     * @example 2016-07-20T08:28:48Z
     *
     * @var string
     */
    public $deployedTime;

    /**
     * @description The description of the API.
     *
     * @example Creates an object
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the API group.
     *
     * @example 1084f9034c744137901057206b39d2b6
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group.
     *
     * @example myGroup2
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The historical version of the API.
     *
     * @example 20160705104552393
     *
     * @var string
     */
    public $historyVersion;

    /**
     * @description The region in which the API is located.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the runtime environment. Valid values:
     *
     *   **RELEASE**
     *   **TEST**
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description Indicates whether an API version is effective. Valid values: **ONLINE** and **OFFLINE**.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'apiId'          => 'ApiId',
        'apiName'        => 'ApiName',
        'deployedTime'   => 'DeployedTime',
        'description'    => 'Description',
        'groupId'        => 'GroupId',
        'groupName'      => 'GroupName',
        'historyVersion' => 'HistoryVersion',
        'regionId'       => 'RegionId',
        'stageName'      => 'StageName',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->historyVersion) {
            $res['HistoryVersion'] = $this->historyVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiHisItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HistoryVersion'])) {
            $model->historyVersion = $map['HistoryVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
