<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertDeployGroupResponseBody;

use AlibabaCloud\Tea\Model;

class deployGroupEntity extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $packageVersionId;

    /**
     * @var int
     */
    public $groupType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'updateTime'       => 'UpdateTime',
        'groupName'        => 'GroupName',
        'createTime'       => 'CreateTime',
        'appVersionId'     => 'AppVersionId',
        'appId'            => 'AppId',
        'packageVersionId' => 'PackageVersionId',
        'groupType'        => 'GroupType',
        'id'               => 'Id',
        'clusterId'        => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->packageVersionId) {
            $res['PackageVersionId'] = $this->packageVersionId;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PackageVersionId'])) {
            $model->packageVersionId = $map['PackageVersionId'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
