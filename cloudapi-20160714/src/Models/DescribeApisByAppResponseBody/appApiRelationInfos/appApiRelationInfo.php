<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppResponseBody\appApiRelationInfos;

use AlibabaCloud\Tea\Model;

class appApiRelationInfo extends Model
{
    /**
     * @description API的ID
     *
     * @var string
     */
    public $apiId;

    /**
     * @description API名称
     *
     * @var string
     */
    public $apiName;

    /**
     * @description 授权有效时间
     *
     * @var string
     */
    public $authVaildTime;

    /**
     * @description 授权来源
     *
     * @var string
     */
    public $authorizationSource;

    /**
     * @description 授权时间
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 分组ID
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 分组名称
     *
     * @var string
     */
    public $groupName;

    /**
     * @description API的请求HTTP Method
     *
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $operator;

    /**
     * @description API的请求路径
     *
     * @var string
     */
    public $path;

    /**
     * @description 地区ID
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 环境名称
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiId'               => 'ApiId',
        'apiName'             => 'ApiName',
        'authVaildTime'       => 'AuthVaildTime',
        'authorizationSource' => 'AuthorizationSource',
        'createdTime'         => 'CreatedTime',
        'description'         => 'Description',
        'groupId'             => 'GroupId',
        'groupName'           => 'GroupName',
        'method'              => 'Method',
        'operator'            => 'Operator',
        'path'                => 'Path',
        'regionId'            => 'RegionId',
        'stageName'           => 'StageName',
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
        if (null !== $this->authVaildTime) {
            $res['AuthVaildTime'] = $this->authVaildTime;
        }
        if (null !== $this->authorizationSource) {
            $res['AuthorizationSource'] = $this->authorizationSource;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
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
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
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
     * @return appApiRelationInfo
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
        if (isset($map['AuthVaildTime'])) {
            $model->authVaildTime = $map['AuthVaildTime'];
        }
        if (isset($map['AuthorizationSource'])) {
            $model->authorizationSource = $map['AuthorizationSource'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
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
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
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
