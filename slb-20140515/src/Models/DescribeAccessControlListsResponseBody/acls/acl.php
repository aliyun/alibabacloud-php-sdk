<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListsResponseBody\acls;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListsResponseBody\acls\acl\tags;
use AlibabaCloud\Tea\Model;

class acl extends Model
{
    /**
     * @description The ACL ID.
     *
     * @example acl-bp1l0kk4gxce43k*****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The ACL name.
     *
     * @example rule1
     *
     * @var string
     */
    public $aclName;

    /**
     * @description The IP version that is used by the CLB instance associated with the ACL.
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The time when the CLB instance was created. The time follows the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2022-08-31T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The resource group ID.
     *
     * @example rg-jfenfbp1lhl0****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The list of tags added to the network ACL. The value of this parameter must be a STRING list in the JSON format.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'aclId'            => 'AclId',
        'aclName'          => 'AclName',
        'addressIPVersion' => 'AddressIPVersion',
        'createTime'       => 'CreateTime',
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
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acl
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
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
