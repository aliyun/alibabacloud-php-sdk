<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponseBody\apiSummarys;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponseBody\apiSummarys\apiSummary\deployedInfos;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisResponseBody\apiSummarys\apiSummary\tagList;
use AlibabaCloud\Tea\Model;

class apiSummary extends Model
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
     * @var string
     */
    public $apiMethod;

    /**
     * @description The name of the API operation.
     *
     * @example CreateObject
     *
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiPath;

    /**
     * @description The creation time (UTC) of the query task.
     *
     * @example 2016-05-20T18:18:25Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @var deployedInfos
     */
    public $deployedInfos;

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
     * @description The name of the group to which the API belongs.
     *
     * @example myGroup2
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The modification time (UTC) of the API.
     *
     * @example 2016-07-23T08:28:48Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the region in which the API resides.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var tagList
     */
    public $tagList;

    /**
     * @description Indicates whether the API is public. Valid values:
     *
     *   **PUBLIC**
     *   **PRIVATE**
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;
    protected $_name = [
        'apiId'         => 'ApiId',
        'apiMethod'     => 'ApiMethod',
        'apiName'       => 'ApiName',
        'apiPath'       => 'ApiPath',
        'createdTime'   => 'CreatedTime',
        'deployedInfos' => 'DeployedInfos',
        'description'   => 'Description',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'modifiedTime'  => 'ModifiedTime',
        'regionId'      => 'RegionId',
        'tagList'       => 'TagList',
        'visibility'    => 'Visibility',
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
        if (null !== $this->apiMethod) {
            $res['ApiMethod'] = $this->apiMethod;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->deployedInfos) {
            $res['DeployedInfos'] = null !== $this->deployedInfos ? $this->deployedInfos->toMap() : null;
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = null !== $this->tagList ? $this->tagList->toMap() : null;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiMethod'])) {
            $model->apiMethod = $map['ApiMethod'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DeployedInfos'])) {
            $model->deployedInfos = deployedInfos::fromMap($map['DeployedInfos']);
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TagList'])) {
            $model->tagList = tagList::fromMap($map['TagList']);
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
