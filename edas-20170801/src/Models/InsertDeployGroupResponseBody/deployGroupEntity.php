<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertDeployGroupResponseBody;

use AlibabaCloud\Dara\Model;

class deployGroupEntity extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $groupName;

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
    public $packageVersionId;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'appId' => 'AppId',
        'appVersionId' => 'AppVersionId',
        'clusterId' => 'ClusterId',
        'createTime' => 'CreateTime',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'id' => 'Id',
        'packageVersionId' => 'PackageVersionId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
