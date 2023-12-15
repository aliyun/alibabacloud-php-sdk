<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys;
use AlibabaCloud\Tea\Model;

class DescribeAccessControlListAttributeResponseBody extends Model
{
    /**
     * @description The information about the access control policy.
     *
     * @var aclEntrys
     */
    public $aclEntrys;

    /**
     * @description The ID of the access control policy.
     *
     * @example acl-uf6fpfdg3b5muska7uqem
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
     * @description Indicates whether the policy was used.
     *
     * @example true
     *
     * @var string
     */
    public $isUsed;

    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ015
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aclEntrys' => 'AclEntrys',
        'aclId'     => 'AclId',
        'aclName'   => 'AclName',
        'isUsed'    => 'IsUsed',
        'requestId' => 'RequestId',
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
        if (null !== $this->isUsed) {
            $res['IsUsed'] = $this->isUsed;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IsUsed'])) {
            $model->isUsed = $map['IsUsed'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
