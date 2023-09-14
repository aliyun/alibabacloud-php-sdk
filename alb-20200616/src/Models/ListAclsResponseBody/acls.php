<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAclsResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclsResponseBody\acls\tags;
use AlibabaCloud\Tea\Model;

class acls extends Model
{
    /**
     * @description The ACL ID.
     *
     * @example nacl-hp34s2h0xx1ht4nwo****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The ACL name.
     *
     * @example test-acl
     *
     * @var string
     */
    public $aclName;

    /**
     * @description The status of the ACL. Valid values:
     *
     *   **Creating**
     *   **Available**
     *   **Configuring**
     *
     * @example Available
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The IP version. Only **IPv4** may be returned.
     *
     * @example IPv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description Indicates whether configuration management is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $configManagedEnabled;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @description The resource group ID.
     *
     * @example rg-atstuj3rtopty****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'aclId'                => 'AclId',
        'aclName'              => 'AclName',
        'aclStatus'            => 'AclStatus',
        'addressIPVersion'     => 'AddressIPVersion',
        'configManagedEnabled' => 'ConfigManagedEnabled',
        'createTime'           => 'CreateTime',
        'resourceGroupId'      => 'ResourceGroupId',
        'tags'                 => 'Tags',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
