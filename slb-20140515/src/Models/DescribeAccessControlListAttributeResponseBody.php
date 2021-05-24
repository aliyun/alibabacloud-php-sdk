<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\relatedListeners;
use AlibabaCloud\Tea\Model;

class DescribeAccessControlListAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $aclName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var aclEntrys
     */
    public $aclEntrys;

    /**
     * @var relatedListeners
     */
    public $relatedListeners;
    protected $_name = [
        'aclId'            => 'AclId',
        'addressIPVersion' => 'AddressIPVersion',
        'requestId'        => 'RequestId',
        'aclName'          => 'AclName',
        'resourceGroupId'  => 'ResourceGroupId',
        'aclEntrys'        => 'AclEntrys',
        'relatedListeners' => 'RelatedListeners',
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
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->aclEntrys) {
            $res['AclEntrys'] = null !== $this->aclEntrys ? $this->aclEntrys->toMap() : null;
        }
        if (null !== $this->relatedListeners) {
            $res['RelatedListeners'] = null !== $this->relatedListeners ? $this->relatedListeners->toMap() : null;
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
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AclEntrys'])) {
            $model->aclEntrys = aclEntrys::fromMap($map['AclEntrys']);
        }
        if (isset($map['RelatedListeners'])) {
            $model->relatedListeners = relatedListeners::fromMap($map['RelatedListeners']);
        }

        return $model;
    }
}
