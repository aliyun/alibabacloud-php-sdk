<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByAppResponseBody\appApiRelationInfos;

use AlibabaCloud\Tea\Model;

class appApiRelationInfo extends Model
{
    /**
     * @example c625795a1e664782a918eaa629e96ab5
     *
     * @var string
     */
    public $apiId;

    /**
     * @example sd2_h5_player_history_competition
     *
     * @var string
     */
    public $apiName;

    /**
     * @example Sun, 02 Jan 2022 16:00:00 GMT
     *
     * @var string
     */
    public $authVaildTime;

    /**
     * @example SELF
     *
     * @var string
     */
    public $authorizationSource;

    /**
     * @example Sun, 02 Jan 2022 16:00:00 GMT
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example b1008kz
     *
     * @var string
     */
    public $description;

    /**
     * @example 38bed48d664149e4b9b5ea576319673f
     *
     * @var string
     */
    public $groupId;

    /**
     * @example wb2022012101605749
     *
     * @var string
     */
    public $groupName;

    /**
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @example PROVIDER
     *
     * @var string
     */
    public $operator;

    /**
     * @example /api/offline/cacheData
     *
     * @var string
     */
    public $path;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example RELEASE
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
