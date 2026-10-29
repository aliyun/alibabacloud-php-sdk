<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedAppInstanceGroupByUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAuthorizedAppInstanceGroupByUserResponseBody\appInstanceGroupModels\apps;

class appInstanceGroupModels extends Model
{
    /**
     * @var string
     */
    public $appCenterImageId;

    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceGroupName;

    /**
     * @var string
     */
    public $appInstanceType;

    /**
     * @var apps[]
     */
    public $apps;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $supportUserGroupMixedAuth;

    /**
     * @var string
     */
    public $userGroupAuthMode;
    protected $_name = [
        'appCenterImageId' => 'AppCenterImageId',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'appInstanceType' => 'AppInstanceType',
        'apps' => 'Apps',
        'expiredTime' => 'ExpiredTime',
        'gmtCreate' => 'GmtCreate',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'supportUserGroupMixedAuth' => 'SupportUserGroupMixedAuth',
        'userGroupAuthMode' => 'UserGroupAuthMode',
    ];

    public function validate()
    {
        if (\is_array($this->apps)) {
            Model::validateArray($this->apps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
        }

        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }

        if (null !== $this->appInstanceType) {
            $res['AppInstanceType'] = $this->appInstanceType;
        }

        if (null !== $this->apps) {
            if (\is_array($this->apps)) {
                $res['Apps'] = [];
                $n1 = 0;
                foreach ($this->apps as $item1) {
                    $res['Apps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportUserGroupMixedAuth) {
            $res['SupportUserGroupMixedAuth'] = $this->supportUserGroupMixedAuth;
        }

        if (null !== $this->userGroupAuthMode) {
            $res['UserGroupAuthMode'] = $this->userGroupAuthMode;
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
        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
        }

        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }

        if (isset($map['AppInstanceType'])) {
            $model->appInstanceType = $map['AppInstanceType'];
        }

        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n1 = 0;
                foreach ($map['Apps'] as $item1) {
                    $model->apps[$n1] = apps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportUserGroupMixedAuth'])) {
            $model->supportUserGroupMixedAuth = $map['SupportUserGroupMixedAuth'];
        }

        if (isset($map['UserGroupAuthMode'])) {
            $model->userGroupAuthMode = $map['UserGroupAuthMode'];
        }

        return $model;
    }
}
