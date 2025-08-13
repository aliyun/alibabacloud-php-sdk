<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest\tagKeyValueParamList;

class CreateTagsRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var tagKeyValueParamList[]
     */
    public $tagKeyValueParamList;
    protected $_name = [
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'tagKeyValueParamList' => 'TagKeyValueParamList',
    ];

    public function validate()
    {
        if (\is_array($this->tagKeyValueParamList)) {
            Model::validateArray($this->tagKeyValueParamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->tagKeyValueParamList) {
            if (\is_array($this->tagKeyValueParamList)) {
                $res['TagKeyValueParamList'] = [];
                $n1 = 0;
                foreach ($this->tagKeyValueParamList as $item1) {
                    $res['TagKeyValueParamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['TagKeyValueParamList'])) {
            if (!empty($map['TagKeyValueParamList'])) {
                $model->tagKeyValueParamList = [];
                $n1 = 0;
                foreach ($map['TagKeyValueParamList'] as $item1) {
                    $model->tagKeyValueParamList[$n1] = tagKeyValueParamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
