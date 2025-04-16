<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizEntityRequest\updateCommand;

use AlibabaCloud\Dara\Model;

class bizObject extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var int[]
     */
    public $refBizEntityIdList;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name' => 'Name',
        'ownerUserId' => 'OwnerUserId',
        'parentId' => 'ParentId',
        'refBizEntityIdList' => 'RefBizEntityIdList',
    ];

    public function validate()
    {
        if (\is_array($this->refBizEntityIdList)) {
            Model::validateArray($this->refBizEntityIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->refBizEntityIdList) {
            if (\is_array($this->refBizEntityIdList)) {
                $res['RefBizEntityIdList'] = [];
                $n1 = 0;
                foreach ($this->refBizEntityIdList as $item1) {
                    $res['RefBizEntityIdList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['RefBizEntityIdList'])) {
            if (!empty($map['RefBizEntityIdList'])) {
                $model->refBizEntityIdList = [];
                $n1 = 0;
                foreach ($map['RefBizEntityIdList'] as $item1) {
                    $model->refBizEntityIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
