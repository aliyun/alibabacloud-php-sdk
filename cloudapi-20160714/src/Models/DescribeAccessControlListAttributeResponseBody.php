<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys;

class DescribeAccessControlListAttributeResponseBody extends Model
{
    /**
     * @var aclEntrys
     */
    public $aclEntrys;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $aclName;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aclEntrys' => 'AclEntrys',
        'aclId' => 'AclId',
        'aclName' => 'AclName',
        'addressIPVersion' => 'AddressIPVersion',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->aclEntrys) {
            $this->aclEntrys->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclEntrys) {
            $res['AclEntrys'] = null !== $this->aclEntrys ? $this->aclEntrys->toArray($noStream) : $this->aclEntrys;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
