<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookRequest\tagList;
use AlibabaCloud\Tea\Model;

class ModifyAddressBookRequest extends Model
{
    /**
     * @description The addresses in the address book. Separate multiple addresses with commas (,). If you set GroupType to **ip**, **port**, or **domain**, you must specify this parameter.
     *
     *   If you set GroupType to **ip**, you must specify IP addresses for the address book. Example: 1.2.XX.XX/32,1.2.XX.XX/24.
     *   If you set GroupType to **port**, you must specify port numbers or port ranges for the address book. Example: 80/80,100/200.
     *   If you set GroupType to **domain**, you must specify domain names for the address book. Example: demo1.aliyun.com,demo2.aliyun.com.
     *
     * @example 192.0.XX.XX/32, 192.0.XX.XX/24
     *
     * @var string
     */
    public $addressList;

    /**
     * @description Specifies whether to automatically add public IP addresses of Elastic Compute Service (ECS) instances to the address book if the instances match the specified tags. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var string
     */
    public $autoAddTagEcs;

    /**
     * @description The description of the address book.
     *
     * @example bj-001
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the address book.
     *
     * @example bj-001
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the address book.
     *
     * >  To modify the address book, you must provide the ID of the address book. You can call the [DescribeAddressBook](~~138869~~) operation to query the ID.
     * @example 0657ab9d-fe8b-4174-b2a6-6baf358e****
     *
     * @var string
     */
    public $groupUuid;

    /**
     * @description The language of the content within the request and response. Valid values:
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
     * @description The logical relationship among ECS tags. Valid values:
     *
     *   **and**: Only the public IP addresses of ECS instances that match all the specified tags can be added to the address book.
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
        'groupUuid'     => 'GroupUuid',
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
        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
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
     * @return ModifyAddressBookRequest
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
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
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
