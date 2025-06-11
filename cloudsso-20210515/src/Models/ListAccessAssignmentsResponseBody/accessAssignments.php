<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListAccessAssignmentsResponseBody;

use AlibabaCloud\Dara\Model;

class accessAssignments extends Model
{
    /**
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @var string
     */
    public $accessConfigurationName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $principalType;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetPath;

    /**
     * @var string
     */
    public $targetPathName;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'accessConfigurationName' => 'AccessConfigurationName',
        'createTime' => 'CreateTime',
        'principalId' => 'PrincipalId',
        'principalName' => 'PrincipalName',
        'principalType' => 'PrincipalType',
        'targetId' => 'TargetId',
        'targetName' => 'TargetName',
        'targetPath' => 'TargetPath',
        'targetPathName' => 'TargetPathName',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
