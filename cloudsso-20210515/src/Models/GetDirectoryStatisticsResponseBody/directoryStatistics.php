<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class directoryStatistics extends Model
{
    /**
     * @var int
     */
    public $accessAssignmentCount;

    /**
     * @var int
     */
    public $accessConfigurationCount;

    /**
     * @var int
     */
    public $accessConfigurationQuota;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryName;

    /**
     * @var int
     */
    public $groupCount;

    /**
     * @var int
     */
    public $groupQuota;

    /**
     * @var int
     */
    public $inProgressTaskCount;

    /**
     * @var int
     */
    public $inlinePolicyPerAccessConfigurationQuota;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $SCIMServerCredentialCount;

    /**
     * @var bool
     */
    public $SCIMSyncEnabled;

    /**
     * @var bool
     */
    public $SSOEnabled;

    /**
     * @var int
     */
    public $systemPolicyPerAccessConfigurationQuota;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var int
     */
    public $userQuota;
    protected $_name = [
        'accessAssignmentCount' => 'AccessAssignmentCount',
        'accessConfigurationCount' => 'AccessConfigurationCount',
        'accessConfigurationQuota' => 'AccessConfigurationQuota',
        'directoryId' => 'DirectoryId',
        'directoryName' => 'DirectoryName',
        'groupCount' => 'GroupCount',
        'groupQuota' => 'GroupQuota',
        'inProgressTaskCount' => 'InProgressTaskCount',
        'inlinePolicyPerAccessConfigurationQuota' => 'InlinePolicyPerAccessConfigurationQuota',
        'region' => 'Region',
        'SCIMServerCredentialCount' => 'SCIMServerCredentialCount',
        'SCIMSyncEnabled' => 'SCIMSyncEnabled',
        'SSOEnabled' => 'SSOEnabled',
        'systemPolicyPerAccessConfigurationQuota' => 'SystemPolicyPerAccessConfigurationQuota',
        'userCount' => 'UserCount',
        'userQuota' => 'UserQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessAssignmentCount) {
            $res['AccessAssignmentCount'] = $this->accessAssignmentCount;
        }

        if (null !== $this->accessConfigurationCount) {
            $res['AccessConfigurationCount'] = $this->accessConfigurationCount;
        }

        if (null !== $this->accessConfigurationQuota) {
            $res['AccessConfigurationQuota'] = $this->accessConfigurationQuota;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }

        if (null !== $this->groupCount) {
            $res['GroupCount'] = $this->groupCount;
        }

        if (null !== $this->groupQuota) {
            $res['GroupQuota'] = $this->groupQuota;
        }

        if (null !== $this->inProgressTaskCount) {
            $res['InProgressTaskCount'] = $this->inProgressTaskCount;
        }

        if (null !== $this->inlinePolicyPerAccessConfigurationQuota) {
            $res['InlinePolicyPerAccessConfigurationQuota'] = $this->inlinePolicyPerAccessConfigurationQuota;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->SCIMServerCredentialCount) {
            $res['SCIMServerCredentialCount'] = $this->SCIMServerCredentialCount;
        }

        if (null !== $this->SCIMSyncEnabled) {
            $res['SCIMSyncEnabled'] = $this->SCIMSyncEnabled;
        }

        if (null !== $this->SSOEnabled) {
            $res['SSOEnabled'] = $this->SSOEnabled;
        }

        if (null !== $this->systemPolicyPerAccessConfigurationQuota) {
            $res['SystemPolicyPerAccessConfigurationQuota'] = $this->systemPolicyPerAccessConfigurationQuota;
        }

        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }

        if (null !== $this->userQuota) {
            $res['UserQuota'] = $this->userQuota;
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
        if (isset($map['AccessAssignmentCount'])) {
            $model->accessAssignmentCount = $map['AccessAssignmentCount'];
        }

        if (isset($map['AccessConfigurationCount'])) {
            $model->accessConfigurationCount = $map['AccessConfigurationCount'];
        }

        if (isset($map['AccessConfigurationQuota'])) {
            $model->accessConfigurationQuota = $map['AccessConfigurationQuota'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }

        if (isset($map['GroupCount'])) {
            $model->groupCount = $map['GroupCount'];
        }

        if (isset($map['GroupQuota'])) {
            $model->groupQuota = $map['GroupQuota'];
        }

        if (isset($map['InProgressTaskCount'])) {
            $model->inProgressTaskCount = $map['InProgressTaskCount'];
        }

        if (isset($map['InlinePolicyPerAccessConfigurationQuota'])) {
            $model->inlinePolicyPerAccessConfigurationQuota = $map['InlinePolicyPerAccessConfigurationQuota'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SCIMServerCredentialCount'])) {
            $model->SCIMServerCredentialCount = $map['SCIMServerCredentialCount'];
        }

        if (isset($map['SCIMSyncEnabled'])) {
            $model->SCIMSyncEnabled = $map['SCIMSyncEnabled'];
        }

        if (isset($map['SSOEnabled'])) {
            $model->SSOEnabled = $map['SSOEnabled'];
        }

        if (isset($map['SystemPolicyPerAccessConfigurationQuota'])) {
            $model->systemPolicyPerAccessConfigurationQuota = $map['SystemPolicyPerAccessConfigurationQuota'];
        }

        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        if (isset($map['UserQuota'])) {
            $model->userQuota = $map['UserQuota'];
        }

        return $model;
    }
}
