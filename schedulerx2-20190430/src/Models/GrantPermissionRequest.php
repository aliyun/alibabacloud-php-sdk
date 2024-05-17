<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class GrantPermissionRequest extends Model
{
    /**
     * @description Specifies whether to grant the permissions with the GRANT option. Valid values: -**true** -**false**
     *
     * @example false
     *
     * @var bool
     */
    public $grantOption;

    /**
     * @description The application group ID.
     *
     * This parameter is required.
     * @example test.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The namespace ID.
     *
     * This parameter is required.
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffcdf01
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the namespace. This parameter is required only for a special third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The user ID.
     *
     * This parameter is required.
     * @example 277641081920123456
     *
     * @var string
     */
    public $userId;

    /**
     * @description The username.
     *
     * This parameter is required.
     * @example lilei
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'grantOption'     => 'GrantOption',
        'groupId'         => 'GroupId',
        'namespace'       => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId'        => 'RegionId',
        'userId'          => 'UserId',
        'userName'        => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantOption) {
            $res['GrantOption'] = $this->grantOption;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantOption'])) {
            $model->grantOption = $map['GrantOption'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
