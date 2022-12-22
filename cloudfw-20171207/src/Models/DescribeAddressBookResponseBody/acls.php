<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody\acls\tagList;
use AlibabaCloud\Tea\Model;

class acls extends Model
{
    /**
     * @description The addresses in the address book.
     *
     * @var string[]
     */
    public $addressList;

    /**
     * @description The number of addresses in the address book.
     *
     * @example 2
     *
     * @var int
     */
    public $addressListCount;

    /**
     * @description Indicates whether the public IP addresses of ECS instances are automatically added to the address book if the instances match the specified tags. The setting takes effect on both newly purchased ECS instances whose tag settings are complete and ECS instances whose tag settings are modified. Valid values:
     *
     * **1**: yes
     * **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $autoAddTagEcs;

    /**
     * @description The description of the address book.
     *
     * @example my address book
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the address book.
     *
     * @example demo_address_book
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the address book. Valid values:
     *
     * **ip**: IP address book
     * **domain**: domain address book
     * **port**: port address book
     * **tag**: ECS tag-based address book
     * **allCloud**: cloud service address book
     * **threat**: threat intelligence address book
     *
     * @example ip
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The unique ID of the address book.
     *
     * @example f04ac7ce-628b-4cb7-be61-310222b7****
     *
     * @var string
     */
    public $groupUuid;

    /**
     * @description The number of times that the address book is referenced.
     *
     * @example 3
     *
     * @var int
     */
    public $referenceCount;

    /**
     * @description The details about the ECS tags that can be automatically added to the address book.
     *
     * @var tagList[]
     */
    public $tagList;

    /**
     * @description The logical relationship among ECS tags. Valid values:
     *
     * **and**: Only the public IP addresses of ECS instances that match all the specified tags can be added to the address book.
     * **or**: The public IP addresses of ECS instances that match any of the specified tags can be added to the address book.
     *
     * @example and
     *
     * @var string
     */
    public $tagRelation;
    protected $_name = [
        'addressList'      => 'AddressList',
        'addressListCount' => 'AddressListCount',
        'autoAddTagEcs'    => 'AutoAddTagEcs',
        'description'      => 'Description',
        'groupName'        => 'GroupName',
        'groupType'        => 'GroupType',
        'groupUuid'        => 'GroupUuid',
        'referenceCount'   => 'ReferenceCount',
        'tagList'          => 'TagList',
        'tagRelation'      => 'TagRelation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressList) {
            $res['AddressList'] = $this->addressList;
        }
        if (null !== $this->addressListCount) {
            $res['AddressListCount'] = $this->addressListCount;
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
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
        }
        if (null !== $this->referenceCount) {
            $res['ReferenceCount'] = $this->referenceCount;
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
        if (null !== $this->tagRelation) {
            $res['TagRelation'] = $this->tagRelation;
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
        if (isset($map['AddressList'])) {
            if (!empty($map['AddressList'])) {
                $model->addressList = $map['AddressList'];
            }
        }
        if (isset($map['AddressListCount'])) {
            $model->addressListCount = $map['AddressListCount'];
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
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }
        if (isset($map['ReferenceCount'])) {
            $model->referenceCount = $map['ReferenceCount'];
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
        if (isset($map['TagRelation'])) {
            $model->tagRelation = $map['TagRelation'];
        }

        return $model;
    }
}
