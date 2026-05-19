<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetLlmProxyConfigForAdminResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $allowedModels;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $blockedModels;

    /**
     * @var string
     */
    public $capability;

    /**
     * @var int
     */
    public $dailyLimit;

    /**
     * @var int
     */
    public $dailyTokenLimit;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $ipBlacklist;

    /**
     * @var string
     */
    public $ipWhitelist;

    /**
     * @var int
     */
    public $rpmLimit;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $suspendReason;
    protected $_name = [
        'allowedModels' => 'AllowedModels',
        'bizId' => 'BizId',
        'blockedModels' => 'BlockedModels',
        'capability' => 'Capability',
        'dailyLimit' => 'DailyLimit',
        'dailyTokenLimit' => 'DailyTokenLimit',
        'enabled' => 'Enabled',
        'extend' => 'Extend',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'ipBlacklist' => 'IpBlacklist',
        'ipWhitelist' => 'IpWhitelist',
        'rpmLimit' => 'RpmLimit',
        'status' => 'Status',
        'suspendReason' => 'SuspendReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedModels) {
            $res['AllowedModels'] = $this->allowedModels;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->blockedModels) {
            $res['BlockedModels'] = $this->blockedModels;
        }

        if (null !== $this->capability) {
            $res['Capability'] = $this->capability;
        }

        if (null !== $this->dailyLimit) {
            $res['DailyLimit'] = $this->dailyLimit;
        }

        if (null !== $this->dailyTokenLimit) {
            $res['DailyTokenLimit'] = $this->dailyTokenLimit;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ipBlacklist) {
            $res['IpBlacklist'] = $this->ipBlacklist;
        }

        if (null !== $this->ipWhitelist) {
            $res['IpWhitelist'] = $this->ipWhitelist;
        }

        if (null !== $this->rpmLimit) {
            $res['RpmLimit'] = $this->rpmLimit;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->suspendReason) {
            $res['SuspendReason'] = $this->suspendReason;
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
        if (isset($map['AllowedModels'])) {
            $model->allowedModels = $map['AllowedModels'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['BlockedModels'])) {
            $model->blockedModels = $map['BlockedModels'];
        }

        if (isset($map['Capability'])) {
            $model->capability = $map['Capability'];
        }

        if (isset($map['DailyLimit'])) {
            $model->dailyLimit = $map['DailyLimit'];
        }

        if (isset($map['DailyTokenLimit'])) {
            $model->dailyTokenLimit = $map['DailyTokenLimit'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IpBlacklist'])) {
            $model->ipBlacklist = $map['IpBlacklist'];
        }

        if (isset($map['IpWhitelist'])) {
            $model->ipWhitelist = $map['IpWhitelist'];
        }

        if (isset($map['RpmLimit'])) {
            $model->rpmLimit = $map['RpmLimit'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SuspendReason'])) {
            $model->suspendReason = $map['SuspendReason'];
        }

        return $model;
    }
}
