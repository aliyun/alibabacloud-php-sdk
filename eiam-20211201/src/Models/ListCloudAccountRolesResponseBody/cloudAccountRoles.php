<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountRolesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountRolesResponseBody\cloudAccountRoles\cloudAccountRoleHealthCheckResult;

class cloudAccountRoles extends Model
{
    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var string
     */
    public $cloudAccountRoleExternalId;

    /**
     * @var string
     */
    public $cloudAccountRoleHealth;

    /**
     * @var cloudAccountRoleHealthCheckResult
     */
    public $cloudAccountRoleHealthCheckResult;

    /**
     * @var string
     */
    public $cloudAccountRoleId;

    /**
     * @var string
     */
    public $cloudAccountRoleName;

    /**
     * @var string
     */
    public $cloudAccountRoleType;

    /**
     * @var string
     */
    public $cloudAccountRoleUsageType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'cloudAccountId' => 'CloudAccountId',
        'cloudAccountRoleExternalId' => 'CloudAccountRoleExternalId',
        'cloudAccountRoleHealth' => 'CloudAccountRoleHealth',
        'cloudAccountRoleHealthCheckResult' => 'CloudAccountRoleHealthCheckResult',
        'cloudAccountRoleId' => 'CloudAccountRoleId',
        'cloudAccountRoleName' => 'CloudAccountRoleName',
        'cloudAccountRoleType' => 'CloudAccountRoleType',
        'cloudAccountRoleUsageType' => 'CloudAccountRoleUsageType',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->cloudAccountRoleHealthCheckResult) {
            $this->cloudAccountRoleHealthCheckResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccountId) {
            $res['CloudAccountId'] = $this->cloudAccountId;
        }

        if (null !== $this->cloudAccountRoleExternalId) {
            $res['CloudAccountRoleExternalId'] = $this->cloudAccountRoleExternalId;
        }

        if (null !== $this->cloudAccountRoleHealth) {
            $res['CloudAccountRoleHealth'] = $this->cloudAccountRoleHealth;
        }

        if (null !== $this->cloudAccountRoleHealthCheckResult) {
            $res['CloudAccountRoleHealthCheckResult'] = null !== $this->cloudAccountRoleHealthCheckResult ? $this->cloudAccountRoleHealthCheckResult->toArray($noStream) : $this->cloudAccountRoleHealthCheckResult;
        }

        if (null !== $this->cloudAccountRoleId) {
            $res['CloudAccountRoleId'] = $this->cloudAccountRoleId;
        }

        if (null !== $this->cloudAccountRoleName) {
            $res['CloudAccountRoleName'] = $this->cloudAccountRoleName;
        }

        if (null !== $this->cloudAccountRoleType) {
            $res['CloudAccountRoleType'] = $this->cloudAccountRoleType;
        }

        if (null !== $this->cloudAccountRoleUsageType) {
            $res['CloudAccountRoleUsageType'] = $this->cloudAccountRoleUsageType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CloudAccountId'])) {
            $model->cloudAccountId = $map['CloudAccountId'];
        }

        if (isset($map['CloudAccountRoleExternalId'])) {
            $model->cloudAccountRoleExternalId = $map['CloudAccountRoleExternalId'];
        }

        if (isset($map['CloudAccountRoleHealth'])) {
            $model->cloudAccountRoleHealth = $map['CloudAccountRoleHealth'];
        }

        if (isset($map['CloudAccountRoleHealthCheckResult'])) {
            $model->cloudAccountRoleHealthCheckResult = cloudAccountRoleHealthCheckResult::fromMap($map['CloudAccountRoleHealthCheckResult']);
        }

        if (isset($map['CloudAccountRoleId'])) {
            $model->cloudAccountRoleId = $map['CloudAccountRoleId'];
        }

        if (isset($map['CloudAccountRoleName'])) {
            $model->cloudAccountRoleName = $map['CloudAccountRoleName'];
        }

        if (isset($map['CloudAccountRoleType'])) {
            $model->cloudAccountRoleType = $map['CloudAccountRoleType'];
        }

        if (isset($map['CloudAccountRoleUsageType'])) {
            $model->cloudAccountRoleUsageType = $map['CloudAccountRoleUsageType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
