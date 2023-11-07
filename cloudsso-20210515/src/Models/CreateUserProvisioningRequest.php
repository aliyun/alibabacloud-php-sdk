<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class CreateUserProvisioningRequest extends Model
{
    /**
     * @example Delete
     *
     * @var string
     */
    public $deletionStrategy;

    /**
     * @example This is a user provisioning.
     *
     * @var string
     */
    public $description;

    /**
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example KeepBoth
     *
     * @var string
     */
    public $duplicationStrategy;

    /**
     * @example g-02ha881d*****
     *
     * @var string
     */
    public $principalId;

    /**
     * @example Group
     *
     * @var string
     */
    public $principalType;

    /**
     * @example 1743382******
     *
     * @var string
     */
    public $targetId;

    /**
     * @example RD-Account
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'deletionStrategy'    => 'DeletionStrategy',
        'description'         => 'Description',
        'directoryId'         => 'DirectoryId',
        'duplicationStrategy' => 'DuplicationStrategy',
        'principalId'         => 'PrincipalId',
        'principalType'       => 'PrincipalType',
        'targetId'            => 'TargetId',
        'targetType'          => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionStrategy) {
            $res['DeletionStrategy'] = $this->deletionStrategy;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->duplicationStrategy) {
            $res['DuplicationStrategy'] = $this->duplicationStrategy;
        }
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserProvisioningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletionStrategy'])) {
            $model->deletionStrategy = $map['DeletionStrategy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DuplicationStrategy'])) {
            $model->duplicationStrategy = $map['DuplicationStrategy'];
        }
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
