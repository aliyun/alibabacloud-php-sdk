<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody\acls\addresses;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody\acls\tagList;

class acls extends Model
{
    /**
     * @var string[]
     */
    public $addressList;

    /**
     * @var int
     */
    public $addressListCount;

    /**
     * @var addresses[]
     */
    public $addresses;

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
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $groupUuid;

    /**
     * @var int
     */
    public $referenceCount;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @var string
     */
    public $tagRelation;
    protected $_name = [
        'addressList' => 'AddressList',
        'addressListCount' => 'AddressListCount',
        'addresses' => 'Addresses',
        'autoAddTagEcs' => 'AutoAddTagEcs',
        'description' => 'Description',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'groupUuid' => 'GroupUuid',
        'referenceCount' => 'ReferenceCount',
        'tagList' => 'TagList',
        'tagRelation' => 'TagRelation',
    ];

    public function validate()
    {
        if (\is_array($this->addressList)) {
            Model::validateArray($this->addressList);
        }
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressList) {
            if (\is_array($this->addressList)) {
                $res['AddressList'] = [];
                $n1 = 0;
                foreach ($this->addressList as $item1) {
                    $res['AddressList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->addressListCount) {
            $res['AddressListCount'] = $this->addressListCount;
        }

        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['Addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['Addresses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagRelation) {
            $res['TagRelation'] = $this->tagRelation;
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
        if (isset($map['AddressList'])) {
            if (!empty($map['AddressList'])) {
                $model->addressList = [];
                $n1 = 0;
                foreach ($map['AddressList'] as $item1) {
                    $model->addressList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AddressListCount'])) {
            $model->addressListCount = $map['AddressListCount'];
        }

        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['Addresses'] as $item1) {
                    $model->addresses[$n1] = addresses::fromMap($item1);
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1] = tagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TagRelation'])) {
            $model->tagRelation = $map['TagRelation'];
        }

        return $model;
    }
}
