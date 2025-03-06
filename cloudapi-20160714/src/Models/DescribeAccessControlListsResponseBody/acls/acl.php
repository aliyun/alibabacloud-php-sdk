<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListsResponseBody\acls;

use AlibabaCloud\Tea\Model;

class acl extends Model
{
    /**
     * @description The ID of the access control policy.
     *
     * @example acl-3nsohdozz0ru8fi5onwz1
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The name of the access control policy.
     *
     * @example testAcl
     *
     * @var string
     */
    public $aclName;

    /**
     * @description 访问控制策略组的IP版本。
     * - **IPv4**。
     * - **IPv6**。
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;
    protected $_name = [
        'aclId'            => 'AclId',
        'aclName'          => 'AclName',
        'addressIPVersion' => 'AddressIPVersion',
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

        return $model;
    }
}
