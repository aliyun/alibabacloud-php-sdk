<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookRequest\tagList;
use AlibabaCloud\Tea\Model;

class AddAddressBookRequest extends Model
{
    /**
     * @description The addresses that you want to add to the address book. Separate multiple addresses with commas (,).
     *
     * >
     * > * If you set GroupType to `ip`, you must add IP addresses to the address book. Example: 192.0.XX.XX/32, 192.0.XX.XX/24.
     * > * If you set GroupType to `port`, you must add port numbers or port ranges to the address book. Example: 80, 100/200.
     * > * If you set GroupType to `domain`, you must add domain names to the address book. Example: example.com, aliyundoc.com.
     * @example 192.0.XX.XX/32, 192.0.XX.XX/24
     *
     * @var string
     */
    public $addressList;

    /**
     * @description Specifies whether to automatically add public IP addresses of ECS instances to the address book if the instances match the specified tags. Valid values:
     *
     *   **1**: yes
     *   **0**: no (default)
     *
     * @example 1
     *
     * @var string
     */
    public $autoAddTagEcs;

    /**
     * @description The description of the address book.
     *
     * @example sz-001
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the address book.
     *
     * @example sz-001
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
     *
     * @example ip
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The language of the content within the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.0.XX.XX
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ECS tags that you want to match.
     *
     * @var tagList[]
     */
    public $tagList;

    /**
     * @description The logical relation among the ECS tags that you want to match. Valid values:
     *
     *   **and**: Only the public IP addresses of ECS instances that match all the specified tags can be added to the address book. This is the default value.
     *   **or**: The public IP addresses of ECS instances that match one of the specified tags can be added to the address book.
     *
     * @example and
     *
     * @var string
     */
    public $tagRelation;
    protected $_name = [
        'addressList'   => 'AddressList',
        'autoAddTagEcs' => 'AutoAddTagEcs',
        'description'   => 'Description',
        'groupName'     => 'GroupName',
        'groupType'     => 'GroupType',
        'lang'          => 'Lang',
        'sourceIp'      => 'SourceIp',
        'tagList'       => 'TagList',
        'tagRelation'   => 'TagRelation',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
     * @return AddAddressBookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressList'])) {
            $model->addressList = $map['AddressList'];
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
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
