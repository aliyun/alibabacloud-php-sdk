<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertDeployGroupResponseBody;

use AlibabaCloud\Tea\Model;

class deployGroupEntity extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-4413-***********
     *
     * @var string
     */
    public $appId;

    /**
     * @description The version of the deployment package for the application.
     *
     *   If the application is deployed, a string of random numbers is returned.
     *   If the application is not deployed, the return value is empty.
     *
     * @example ****f4c50-16ee-a02b-667*****
     *
     * @var string
     */
    public $appVersionId;

    /**
     * @description The ID of the cluster.
     *
     * @example 0d247b93-8d62-4e34***********
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The time when the instance group was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573627695779
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The name of the instance group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the instance group. Valid values:
     *
     *   0: the default group.
     *   1: a group for which canary traffic management is not enabled.
     *   2: a group for which canary traffic management is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $groupType;

    /**
     * @description The ID of the instance group.
     *
     * @example 577f4c50-16ee-43d8-a02b-667*********
     *
     * @var string
     */
    public $id;

    /**
     * @description The version of the deployment package that was used to deploy an application in the instance group.
     *
     *   If an application is deployed in the instance group, a string of random numbers is returned.
     *   If no application is deployed in the instance group, the return value is empty.
     *
     * @example ****7b93-8d62-4e34***********
     *
     * @var string
     */
    public $packageVersionId;

    /**
     * @description The time when the instance group was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573627695779
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'appId'            => 'AppId',
        'appVersionId'     => 'AppVersionId',
        'clusterId'        => 'ClusterId',
        'createTime'       => 'CreateTime',
        'groupName'        => 'GroupName',
        'groupType'        => 'GroupType',
        'id'               => 'Id',
        'packageVersionId' => 'PackageVersionId',
        'updateTime'       => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->packageVersionId) {
            $res['PackageVersionId'] = $this->packageVersionId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployGroupEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PackageVersionId'])) {
            $model->packageVersionId = $map['PackageVersionId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
