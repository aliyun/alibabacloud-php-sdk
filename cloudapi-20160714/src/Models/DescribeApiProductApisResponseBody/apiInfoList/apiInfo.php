<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductApisResponseBody\apiInfoList;

use AlibabaCloud\Tea\Model;

class apiInfo extends Model
{
    /**
     * @description The API ID.
     *
     * @example dd46297680014a7e8e318308f3345951
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The API name.
     *
     * @example testApi
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The API description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the API group.
     *
     * @example 1e377f18142345dfb700cd8911c2463a
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group to which the API belongs.
     *
     * @example testApiGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The request method of the API.
     *
     * @example POST
     *
     * @var string
     */
    public $method;

    /**
     * @description The request path of the API.
     *
     * @example /test
     *
     * @var string
     */
    public $path;

    /**
     * @description The ID of the region where the API is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The environment to which the API is published. Valid values:
     *
     *   **RELEASE**: the production environment
     *   **PRE**: the staging environment
     *   **TEST**: the test environment
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiId'       => 'ApiId',
        'apiName'     => 'ApiName',
        'description' => 'Description',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'method'      => 'Method',
        'path'        => 'Path',
        'regionId'    => 'RegionId',
        'stageName'   => 'StageName',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
