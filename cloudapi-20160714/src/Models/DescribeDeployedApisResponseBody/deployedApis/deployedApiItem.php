<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisResponseBody\deployedApis;

use AlibabaCloud\Tea\Model;

class deployedApiItem extends Model
{
    /**
     * @description The API ID.
     *
     * @example c076144d7878437b8f82fb85890ce6a0
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The HTTP method of the API request.
     *
     * @example POST
     *
     * @var string
     */
    public $apiMethod;

    /**
     * @description The API name.
     *
     * @example DescribeObjects
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The request path of the API.
     *
     * @example /trademark/search
     *
     * @var string
     */
    public $apiPath;

    /**
     * @description The time when the API was published. The time is displayed in UTC.
     *
     * @example 2016-07-23T08:28:48Z
     *
     * @var string
     */
    public $deployedTime;

    /**
     * @description The API description.
     *
     * @example Queries objects by page
     *
     * @var string
     */
    public $description;

    /**
     * @description The API group ID.
     *
     * @example 63be9002440b4778a61122f14c2b2bbb
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group to which the API belongs.
     *
     * @example myGroup3
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The region ID of the API.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The environment name. Valid values:
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
        'apiId'        => 'ApiId',
        'apiMethod'    => 'ApiMethod',
        'apiName'      => 'ApiName',
        'apiPath'      => 'ApiPath',
        'deployedTime' => 'DeployedTime',
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'groupName'    => 'GroupName',
        'regionId'     => 'RegionId',
        'stageName'    => 'StageName',
        'visibility'   => 'Visibility',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployedApiItem
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
