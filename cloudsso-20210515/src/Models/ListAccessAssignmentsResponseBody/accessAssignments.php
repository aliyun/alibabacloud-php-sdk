<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessAssignmentsResponseBody;

use AlibabaCloud\Tea\Model;

class accessAssignments extends Model
{
    /**
     * @description The ID of the access configuration.
     *
     * @example ac-00jhtfl8thteu6uj****
     *
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @description The name of the access configuration.
     *
     * @example ECS-Admin
     *
     * @var string
     */
    public $accessConfigurationName;

    /**
     * @description The time when the access permissions were assigned.
     *
     * @example 2021-11-04T10:03:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the CloudSSO identity.
     *
     * @example u-00q8wbq42wiltcrk****
     *
     * @var string
     */
    public $principalId;

    /**
     * @description The name of the CloudSSO identity.
     *
     * @example Alice
     *
     * @var string
     */
    public $principalName;

    /**
     * @description The type of the CloudSSO identity. Valid values:
     *
     *   User
     *   Group
     *
     * @example User
     *
     * @var string
     */
    public $principalType;

    /**
     * @description The ID of the task object.
     *
     * @example 114240524784****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the task object.
     *
     * @example dev-test
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The path ID of the task object in your resource directory.
     *
     * @example rd-3G****\/r-Wm****\/114240524784****
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description The path name of the task object in your resource directory.
     *
     * @example rd-3G****\/root/dev-test
     *
     * @var string
     */
    public $targetPathName;

    /**
     * @description The type of the task object.
     *
     * The value is fixed as RD-Account, which indicates an account in your resource directory.
     * @example RD-Account
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'accessConfigurationId'   => 'AccessConfigurationId',
        'accessConfigurationName' => 'AccessConfigurationName',
        'createTime'              => 'CreateTime',
        'principalId'             => 'PrincipalId',
        'principalName'           => 'PrincipalName',
        'principalType'           => 'PrincipalType',
        'targetId'                => 'TargetId',
        'targetName'              => 'TargetName',
        'targetPath'              => 'TargetPath',
        'targetPathName'          => 'TargetPathName',
        'targetType'              => 'TargetType',
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
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessAssignments
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
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
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

        return $model;
    }
}
