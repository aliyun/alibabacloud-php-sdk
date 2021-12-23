<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAclsResponseBody;

use AlibabaCloud\Tea\Model;

class acls extends Model
{
    /**
     * @description 访问控制策略id
     *
     * @var string
     */
    public $aclId;

    /**
     * @description 访问控制策略名称
     *
     * @var string
     */
    public $aclName;

    /**
     * @description 状态
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description IP版本
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description 配置管理
     *
     * @var bool
     */
    public $configManagedEnabled;

    /**
     * @description 资源组ID
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'aclId'                => 'AclId',
        'aclName'              => 'AclName',
        'aclStatus'            => 'AclStatus',
        'addressIPVersion'     => 'AddressIPVersion',
        'configManagedEnabled' => 'ConfigManagedEnabled',
        'resourceGroupId'      => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->configManagedEnabled) {
            $res['ConfigManagedEnabled'] = $this->configManagedEnabled;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['ConfigManagedEnabled'])) {
            $model->configManagedEnabled = $map['ConfigManagedEnabled'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
