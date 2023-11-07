<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class directoryStatistics extends Model
{
    /**
     * @description The number of access permissions that are assigned.
     *
     * @example 5
     *
     * @var int
     */
    public $accessAssignmentCount;

    /**
     * @description The number of access configurations.
     *
     * @example 6
     *
     * @var int
     */
    public $accessConfigurationCount;

    /**
     * @description The quota for access configurations.
     *
     * @example 1000
     *
     * @var int
     */
    public $accessConfigurationQuota;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The name of the directory.
     *
     * @example new-example
     *
     * @var string
     */
    public $directoryName;

    /**
     * @description The number of user groups.
     *
     * @example 4
     *
     * @var int
     */
    public $groupCount;

    /**
     * @description The quota for user groups.
     *
     * @example 500
     *
     * @var int
     */
    public $groupQuota;

    /**
     * @description The number of tasks that are being performed.
     *
     * @example 0
     *
     * @var int
     */
    public $inProgressTaskCount;

    /**
     * @description The region ID of the directory.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The number of SCIM credentials.
     *
     * @example 2
     *
     * @var int
     */
    public $SCIMServerCredentialCount;

    /**
     * @description Indicates whether SCIM synchronization is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $SCIMSyncEnabled;

    /**
     * @description Indicates whether SSO is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $SSOEnabled;

    /**
     * @description The quota for system policies that can be configured for an access configuration.
     *
     * @example 20
     *
     * @var int
     */
    public $systemPolicyPerAccessConfigurationQuota;

    /**
     * @description The number of users.
     *
     * @example 16
     *
     * @var int
     */
    public $userCount;

    /**
     * @description The quota for users.
     *
     * @example 1000
     *
     * @var int
     */
    public $userQuota;
    protected $_name = [
        'accessAssignmentCount'                   => 'AccessAssignmentCount',
        'accessConfigurationCount'                => 'AccessConfigurationCount',
        'accessConfigurationQuota'                => 'AccessConfigurationQuota',
        'directoryId'                             => 'DirectoryId',
        'directoryName'                           => 'DirectoryName',
        'groupCount'                              => 'GroupCount',
        'groupQuota'                              => 'GroupQuota',
        'inProgressTaskCount'                     => 'InProgressTaskCount',
        'region'                                  => 'Region',
        'SCIMServerCredentialCount'               => 'SCIMServerCredentialCount',
        'SCIMSyncEnabled'                         => 'SCIMSyncEnabled',
        'SSOEnabled'                              => 'SSOEnabled',
        'systemPolicyPerAccessConfigurationQuota' => 'SystemPolicyPerAccessConfigurationQuota',
        'userCount'                               => 'UserCount',
        'userQuota'                               => 'UserQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return directoryStatistics
     */
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
