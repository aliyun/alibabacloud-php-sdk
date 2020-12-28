<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\relatedListeners;
use AlibabaCloud\Tea\Model;

class DescribeAccessControlListAttributeResponseBody extends Model
{
    /**
     * @var aclEntrys[]
     */
    public $aclEntrys;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $aclId;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var relatedListeners[]
     */
    public $relatedListeners;

    /**
     * @var string
     */
    public $aclName;
    protected $_name = [
        'aclEntrys'        => 'AclEntrys',
        'requestId'        => 'RequestId',
        'resourceGroupId'  => 'ResourceGroupId',
        'aclId'            => 'AclId',
        'addressIPVersion' => 'AddressIPVersion',
        'relatedListeners' => 'RelatedListeners',
        'aclName'          => 'AclName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclEntrys) {
            $res['AclEntrys'] = [];
            if (null !== $this->aclEntrys && \is_array($this->aclEntrys)) {
                $n = 0;
                foreach ($this->aclEntrys as $item) {
                    $res['AclEntrys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->relatedListeners) {
            $res['RelatedListeners'] = [];
            if (null !== $this->relatedListeners && \is_array($this->relatedListeners)) {
                $n = 0;
                foreach ($this->relatedListeners as $item) {
                    $res['RelatedListeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aclName) {
            $res['AclName'] = $this->aclName;
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
            if (!empty($map['AclEntrys'])) {
                $model->aclEntrys = [];
                $n                = 0;
                foreach ($map['AclEntrys'] as $item) {
                    $model->aclEntrys[$n++] = null !== $item ? aclEntrys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['RelatedListeners'])) {
            if (!empty($map['RelatedListeners'])) {
                $model->relatedListeners = [];
                $n                       = 0;
                foreach ($map['RelatedListeners'] as $item) {
                    $model->relatedListeners[$n++] = null !== $item ? relatedListeners::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AclName'])) {
            $model->aclName = $map['AclName'];
        }

        return $model;
    }
}
