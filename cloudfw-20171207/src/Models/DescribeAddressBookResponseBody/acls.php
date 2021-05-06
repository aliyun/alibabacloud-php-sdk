<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody\acls\tagList;
use AlibabaCloud\Tea\Model;

class acls extends Model
{
    /**
     * @var int
     */
    public $addressListCount;

    /**
     * @var string
     */
    public $groupUuid;

    /**
     * @var int
     */
    public $autoAddTagEcs;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $referenceCount;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $tagRelation;

    /**
     * @var int
     */
    public $global;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @var string[]
     */
    public $addressList;
    protected $_name = [
        'addressListCount' => 'AddressListCount',
        'groupUuid'        => 'GroupUuid',
        'autoAddTagEcs'    => 'AutoAddTagEcs',
        'description'      => 'Description',
        'groupName'        => 'GroupName',
        'referenceCount'   => 'ReferenceCount',
        'groupType'        => 'GroupType',
        'tagRelation'      => 'TagRelation',
        'global'           => 'Global',
        'tagList'          => 'TagList',
        'addressList'      => 'AddressList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressListCount) {
            $res['AddressListCount'] = $this->addressListCount;
        }
        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
        }
        if (null !== $this->autoAddTagEcs) {
            $res['AutoAddTagEcs'] = $this->autoAddTagEcs;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->referenceCount) {
            $res['ReferenceCount'] = $this->referenceCount;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->tagRelation) {
            $res['TagRelation'] = $this->tagRelation;
        }
        if (null !== $this->global) {
            $res['Global'] = $this->global;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = [];
            if (null !== $this->tagList && \is_array($this->tagList)) {
                $n = 0;
                foreach ($this->tagList as $item) {
                    $res['TagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->addressList) {
            $res['AddressList'] = $this->addressList;
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
        if (isset($map['AddressListCount'])) {
            $model->addressListCount = $map['AddressListCount'];
        }
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }
        if (isset($map['AutoAddTagEcs'])) {
            $model->autoAddTagEcs = $map['AutoAddTagEcs'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ReferenceCount'])) {
            $model->referenceCount = $map['ReferenceCount'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['TagRelation'])) {
            $model->tagRelation = $map['TagRelation'];
        }
        if (isset($map['Global'])) {
            $model->global = $map['Global'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n              = 0;
                foreach ($map['TagList'] as $item) {
                    $model->tagList[$n++] = null !== $item ? tagList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AddressList'])) {
            if (!empty($map['AddressList'])) {
                $model->addressList = $map['AddressList'];
            }
        }

        return $model;
    }
}
