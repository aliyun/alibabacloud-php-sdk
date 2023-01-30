<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByIpControlResponseBody\apiInfos;

use AlibabaCloud\Tea\Model;

class apiInfo extends Model
{
    /**
     * @description The ID of the API.
     *
     * @example 3b81fd160f5645e097cc8855d75a1cf6
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The API operation.
     *
     * @example testapi
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The binding time of the API.
     *
     * @example 2016-07-23T08:28:48Z
     *
     * @var string
     */
    public $boundTime;

    /**
     * @description The description of the API.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the API group.
     *
     * @example 0009db9c828549768a200320714b8930
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group.
     *
     * @example mygroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The region where the API is located.
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
     * @example TEST
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
        'apiId'       => 'ApiId',
        'apiName'     => 'ApiName',
        'boundTime'   => 'BoundTime',
        'description' => 'Description',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'regionId'    => 'RegionId',
        'stageName'   => 'StageName',
        'visibility'  => 'Visibility',
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
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
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
     * @return apiInfo
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
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
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
