<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\groupList;

use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-4413-****-************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the change process for application deployment in the instance group.
     *
     * @example changeorder_a**_*******_**
     *
     * @var string
     */
    public $appVersionId;

    /**
     * @description The ID of the cluster.
     *
     * @example 0d247b93-8d62-4e34-****-************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The time when the instance group was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573626155185
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the instance group.
     *
     * @example 8123db90-880f-486f-****-************
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the instance group.
     *
     * @example _DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the instance group. Valid values:
     *
     *   0: default group
     *   1: self-managed group
     *   2: canary release group
     *
     * @example 0
     *
     * @var int
     */
    public $groupType;

    /**
     * @description The version of the deployment package that was used to deploy an application in the instance group.
     *
     * @example 441beb18-da42-44dc-****-************
     *
     * @var string
     */
    public $packageVersionId;

    /**
     * @description The time when the instance group was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573627441388
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'appId'            => 'AppId',
        'appVersionId'     => 'AppVersionId',
        'clusterId'        => 'ClusterId',
        'createTime'       => 'CreateTime',
        'groupId'          => 'GroupId',
        'groupName'        => 'GroupName',
        'groupType'        => 'GroupType',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
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
     * @return group
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
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
