<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QuerySupabaseInstanceInfoForAdminResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $anonKey;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $dbInstanceCreateTime;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $dbPublicUrl;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $instanceCreateFinishedTime;

    /**
     * @var string
     */
    public $instanceCreateStatus;

    /**
     * @var int
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $rdsDatabasePassword;

    /**
     * @var string
     */
    public $serviceKey;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supabaseDashboardPassword;

    /**
     * @var string
     */
    public $supabaseDashboardUserName;

    /**
     * @var string
     */
    public $supabaseInstanceCreateTime;

    /**
     * @var string
     */
    public $supabaseInstanceId;

    /**
     * @var string
     */
    public $supabaseKongUrl;

    /**
     * @var string
     */
    public $supabasePrivateIp;

    /**
     * @var string
     */
    public $supabasePublicIp;

    /**
     * @var string
     */
    public $supabasePublicUrl;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'anonKey' => 'AnonKey',
        'bizId' => 'BizId',
        'dbInstanceCreateTime' => 'DbInstanceCreateTime',
        'dbInstanceId' => 'DbInstanceId',
        'dbPublicUrl' => 'DbPublicUrl',
        'dbType' => 'DbType',
        'extra' => 'Extra',
        'instanceCreateFinishedTime' => 'InstanceCreateFinishedTime',
        'instanceCreateStatus' => 'InstanceCreateStatus',
        'isDeleted' => 'IsDeleted',
        'rdsDatabasePassword' => 'RdsDatabasePassword',
        'serviceKey' => 'ServiceKey',
        'status' => 'Status',
        'supabaseDashboardPassword' => 'SupabaseDashboardPassword',
        'supabaseDashboardUserName' => 'SupabaseDashboardUserName',
        'supabaseInstanceCreateTime' => 'SupabaseInstanceCreateTime',
        'supabaseInstanceId' => 'SupabaseInstanceId',
        'supabaseKongUrl' => 'SupabaseKongUrl',
        'supabasePrivateIp' => 'SupabasePrivateIp',
        'supabasePublicIp' => 'SupabasePublicIp',
        'supabasePublicUrl' => 'SupabasePublicUrl',
        'tenantId' => 'TenantId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anonKey) {
            $res['AnonKey'] = $this->anonKey;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->dbInstanceCreateTime) {
            $res['DbInstanceCreateTime'] = $this->dbInstanceCreateTime;
        }

        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->dbPublicUrl) {
            $res['DbPublicUrl'] = $this->dbPublicUrl;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        if (null !== $this->instanceCreateFinishedTime) {
            $res['InstanceCreateFinishedTime'] = $this->instanceCreateFinishedTime;
        }

        if (null !== $this->instanceCreateStatus) {
            $res['InstanceCreateStatus'] = $this->instanceCreateStatus;
        }

        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }

        if (null !== $this->rdsDatabasePassword) {
            $res['RdsDatabasePassword'] = $this->rdsDatabasePassword;
        }

        if (null !== $this->serviceKey) {
            $res['ServiceKey'] = $this->serviceKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supabaseDashboardPassword) {
            $res['SupabaseDashboardPassword'] = $this->supabaseDashboardPassword;
        }

        if (null !== $this->supabaseDashboardUserName) {
            $res['SupabaseDashboardUserName'] = $this->supabaseDashboardUserName;
        }

        if (null !== $this->supabaseInstanceCreateTime) {
            $res['SupabaseInstanceCreateTime'] = $this->supabaseInstanceCreateTime;
        }

        if (null !== $this->supabaseInstanceId) {
            $res['SupabaseInstanceId'] = $this->supabaseInstanceId;
        }

        if (null !== $this->supabaseKongUrl) {
            $res['SupabaseKongUrl'] = $this->supabaseKongUrl;
        }

        if (null !== $this->supabasePrivateIp) {
            $res['SupabasePrivateIp'] = $this->supabasePrivateIp;
        }

        if (null !== $this->supabasePublicIp) {
            $res['SupabasePublicIp'] = $this->supabasePublicIp;
        }

        if (null !== $this->supabasePublicUrl) {
            $res['SupabasePublicUrl'] = $this->supabasePublicUrl;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AnonKey'])) {
            $model->anonKey = $map['AnonKey'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['DbInstanceCreateTime'])) {
            $model->dbInstanceCreateTime = $map['DbInstanceCreateTime'];
        }

        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['DbPublicUrl'])) {
            $model->dbPublicUrl = $map['DbPublicUrl'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        if (isset($map['InstanceCreateFinishedTime'])) {
            $model->instanceCreateFinishedTime = $map['InstanceCreateFinishedTime'];
        }

        if (isset($map['InstanceCreateStatus'])) {
            $model->instanceCreateStatus = $map['InstanceCreateStatus'];
        }

        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }

        if (isset($map['RdsDatabasePassword'])) {
            $model->rdsDatabasePassword = $map['RdsDatabasePassword'];
        }

        if (isset($map['ServiceKey'])) {
            $model->serviceKey = $map['ServiceKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupabaseDashboardPassword'])) {
            $model->supabaseDashboardPassword = $map['SupabaseDashboardPassword'];
        }

        if (isset($map['SupabaseDashboardUserName'])) {
            $model->supabaseDashboardUserName = $map['SupabaseDashboardUserName'];
        }

        if (isset($map['SupabaseInstanceCreateTime'])) {
            $model->supabaseInstanceCreateTime = $map['SupabaseInstanceCreateTime'];
        }

        if (isset($map['SupabaseInstanceId'])) {
            $model->supabaseInstanceId = $map['SupabaseInstanceId'];
        }

        if (isset($map['SupabaseKongUrl'])) {
            $model->supabaseKongUrl = $map['SupabaseKongUrl'];
        }

        if (isset($map['SupabasePrivateIp'])) {
            $model->supabasePrivateIp = $map['SupabasePrivateIp'];
        }

        if (isset($map['SupabasePublicIp'])) {
            $model->supabasePublicIp = $map['SupabasePublicIp'];
        }

        if (isset($map['SupabasePublicUrl'])) {
            $model->supabasePublicUrl = $map['SupabasePublicUrl'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
