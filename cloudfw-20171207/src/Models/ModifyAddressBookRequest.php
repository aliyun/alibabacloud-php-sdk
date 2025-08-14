<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyAddressBookRequest\tagList;

class ModifyAddressBookRequest extends Model
{
    /**
     * @var string
     */
    public $addressList;

    /**
     * @var string
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
    public $groupUuid;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $modifyMode;

    /**
     * @var string
     */
    public $sourceIp;

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
        'autoAddTagEcs' => 'AutoAddTagEcs',
        'description' => 'Description',
        'groupName' => 'GroupName',
        'groupUuid' => 'GroupUuid',
        'lang' => 'Lang',
        'modifyMode' => 'ModifyMode',
        'sourceIp' => 'SourceIp',
        'tagList' => 'TagList',
        'tagRelation' => 'TagRelation',
    ];

    public function validate()
    {
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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

        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
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
