<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAclsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListAclsResponseBody\acls\tags;
use AlibabaCloud\Tea\Model;

class acls extends Model
{
    /**
     * @description The ID of the network ACL.
     *
     * @example nacl-hp34s2h0xx1ht4nwo****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The name of the network ACL.
     *
     * @example test-acl
     *
     * @var string
     */
    public $aclName;

    /**
     * @description The status of the network ACL. Valid values:
     *
     *   **init**: The network ACL is being initialized.
     *   **active**: The network ACL is available.
     *   **configuring**: The network ACL is being configured.
     *   **updating**: The network ACL is being updated.
     *   **deleting:** The network ACL is being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The IP version of the network ACL. Valid values:
     *
     *   **IPv4**
     *   **IPv6**
     *
     * @example IPv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2lgw4evw****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags of the network ACL.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'aclId'            => 'AclId',
        'aclName'          => 'AclName',
        'aclStatus'        => 'AclStatus',
        'addressIPVersion' => 'AddressIPVersion',
        'resourceGroupId'  => 'ResourceGroupId',
        'tags'             => 'Tags',
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
