<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessConfigurationProvisioningsResponseBody;

use AlibabaCloud\Tea\Model;

class accessConfigurationProvisionings extends Model
{
    /**
     * @description The ID of the access configuration.
     *
     * @example ac-00ccule7tadaijxc****
     *
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @description The name of the access configuration.
     *
     * @example VPC-Admin
     *
     * @var string
     */
    public $accessConfigurationName;

    /**
     * @description The first time when the access configuration was provisioned.
     *
     * @example 2021-07-26T08:54:14Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The name of the custom policy that is created for an account in the resource directory.
     *
     * @var string[]
     */
    public $RAMPolicyNames;

    /**
     * @description The name of the RAM role that is created for an account in the resource directory.
     *
     * @example AliyunReservedSSO-VPC-Admin
     *
     * @var string
     */
    public $RAMRoleName;

    /**
     * @description The name of the Security Assertion Markup Language (SAML) identity provider (IdP) that is created within an account in the resource directory.
     *
     * @example AliyunReservedSSO-d-00fc2p61****
     *
     * @var string
     */
    public $SAMLProviderName;

    /**
     * @description The status of the access configuration. Valid values:
     *
     *   Provisioned: The access configuration is provisioned.
     *   ReprovisionRequired: The access configuration needs to be re-provisioned.
     *   DeprovisionFailed: The access configuration failed to be provisioned.
     *
     * @example Provisioned
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task object.
     *
     * If the value of TargetType is `RD-Account`, the value of this parameter is the UID of an account in the resource directory.
     * @example 101522521960****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the task object.
     *
     * @example SharedServices_5009****
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The path ID of the task object in the resource directory.
     *
     * @example rd-3G****\/r-Wm****\/fd-pjM8oy****\/101522521960****
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description The path name of the task object in the resource directory.
     *
     * @example rd-3G****\/root/Core/SharedServices_5009****
     *
     * @var string
     */
    public $targetPathName;

    /**
     * @description The type of the task object.
     *
     * Set the value to RD-Account, which specifies the accounts in the resource directory.
     * @example RD-Account
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The last time when the access configuration was provisioned.
     *
     * @example 2021-07-26T08:54:18Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'accessConfigurationId'   => 'AccessConfigurationId',
        'accessConfigurationName' => 'AccessConfigurationName',
        'createTime'              => 'CreateTime',
        'RAMPolicyNames'          => 'RAMPolicyNames',
        'RAMRoleName'             => 'RAMRoleName',
        'SAMLProviderName'        => 'SAMLProviderName',
        'status'                  => 'Status',
        'targetId'                => 'TargetId',
        'targetName'              => 'TargetName',
        'targetPath'              => 'TargetPath',
        'targetPathName'          => 'TargetPathName',
        'targetType'              => 'TargetType',
        'updateTime'              => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }
        if (null !== $this->accessConfigurationName) {
            $res['AccessConfigurationName'] = $this->accessConfigurationName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->RAMPolicyNames) {
            $res['RAMPolicyNames'] = $this->RAMPolicyNames;
        }
        if (null !== $this->RAMRoleName) {
            $res['RAMRoleName'] = $this->RAMRoleName;
        }
        if (null !== $this->SAMLProviderName) {
            $res['SAMLProviderName'] = $this->SAMLProviderName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }
        if (null !== $this->targetPathName) {
            $res['TargetPathName'] = $this->targetPathName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessConfigurationProvisionings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }
        if (isset($map['AccessConfigurationName'])) {
            $model->accessConfigurationName = $map['AccessConfigurationName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RAMPolicyNames'])) {
            if (!empty($map['RAMPolicyNames'])) {
                $model->RAMPolicyNames = $map['RAMPolicyNames'];
            }
        }
        if (isset($map['RAMRoleName'])) {
            $model->RAMRoleName = $map['RAMRoleName'];
        }
        if (isset($map['SAMLProviderName'])) {
            $model->SAMLProviderName = $map['SAMLProviderName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }
        if (isset($map['TargetPathName'])) {
            $model->targetPathName = $map['TargetPathName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
