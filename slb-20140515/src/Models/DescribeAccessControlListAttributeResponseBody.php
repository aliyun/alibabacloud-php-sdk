<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\aclEntrys;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\relatedListeners;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeAccessControlListAttributeResponseBody\tags;

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
    public $createTime;

    /**
     * @var relatedListeners
     */
    public $relatedListeners;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var int
     */
    public $totalAclEntry;
    protected $_name = [
        'aclEntrys' => 'AclEntrys',
        'aclId' => 'AclId',
        'aclName' => 'AclName',
        'addressIPVersion' => 'AddressIPVersion',
        'createTime' => 'CreateTime',
        'relatedListeners' => 'RelatedListeners',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'totalAclEntry' => 'TotalAclEntry',
    ];

    public function validate()
    {
        if (null !== $this->aclEntrys) {
            $this->aclEntrys->validate();
        }
        if (null !== $this->relatedListeners) {
            $this->relatedListeners->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->relatedListeners) {
            $res['RelatedListeners'] = null !== $this->relatedListeners ? $this->relatedListeners->toArray($noStream) : $this->relatedListeners;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->totalAclEntry) {
            $res['TotalAclEntry'] = $this->totalAclEntry;
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
