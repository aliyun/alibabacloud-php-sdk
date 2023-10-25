<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\relatedListeners;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeAccessControlListAttributeResponseBody extends Model
{
    /**
     * @description The IP entries that you want to remove from the network ACL. Valid values:
     *
     *   **entry**: the IP address or CIDR block that you want to remove from the network ACL. Separate multiple IP addresses or CIDR blocks with commas (,).
     *   **comment**: the description of the network ACL.
     *
     * @var aclEntrys
     */
    public $aclEntrys;

    /**
     * @description The ID of the network ACL.
     *
     * @example acl-bp1l0k********kzet04s
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The ACL name. The name must be 1 to 80 characters in length, and can contain letters, digits, periods (.), hyphens (-), forward slashes (/), and underscores (\_). The name of each ACL must be unique within a region. Fuzzy match is supported.
     *
     * @example doctest
     *
     * @var string
     */
    public $aclName;

    /**
     * @description The IP version. Valid values: **ipv4** and **ipv6**.
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The time when the ACL was created. The time follows the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2022-08-31T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The listeners that are associated with the network ACL.
     *
     * @var relatedListeners
     */
    public $relatedListeners;

    /**
     * @description The ID of the request.
     *
     * @example C9906A1D-86F7-4C9C-A369-54DA42EF206A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource group ID.
     *
     * @example rg-******************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The total number of access control entries.
     *
     * @example 200
     *
     * @var int
     */
    public $totalAclEntry;
    protected $_name = [
        'aclEntrys'        => 'AclEntrys',
        'aclId'            => 'AclId',
        'aclName'          => 'AclName',
        'addressIPVersion' => 'AddressIPVersion',
        'createTime'       => 'CreateTime',
        'relatedListeners' => 'RelatedListeners',
        'requestId'        => 'RequestId',
        'resourceGroupId'  => 'ResourceGroupId',
        'tags'             => 'Tags',
        'totalAclEntry'    => 'TotalAclEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntrys) {
            $res['AclEntrys'] = null !== $this->aclEntrys ? $this->aclEntrys->toMap() : null;
        }
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
        if (null !== $this->relatedListeners) {
            $res['RelatedListeners'] = null !== $this->relatedListeners ? $this->relatedListeners->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->totalAclEntry) {
            $res['TotalAclEntry'] = $this->totalAclEntry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccessControlListAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclEntrys'])) {
            $model->aclEntrys = aclEntrys::fromMap($map['AclEntrys']);
        }
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
        if (isset($map['RelatedListeners'])) {
            $model->relatedListeners = relatedListeners::fromMap($map['RelatedListeners']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TotalAclEntry'])) {
            $model->totalAclEntry = $map['TotalAclEntry'];
        }

        return $model;
    }
}
