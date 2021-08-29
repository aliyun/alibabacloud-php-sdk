<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest\tagKeyValueParamList;
use AlibabaCloud\Tea\Model;

class CreateTagsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var tagKeyValueParamList[]
     */
    public $tagKeyValueParamList;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'tagKeyValueParamList' => 'TagKeyValueParamList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tagKeyValueParamList) {
            $res['TagKeyValueParamList'] = [];
            if (null !== $this->tagKeyValueParamList && \is_array($this->tagKeyValueParamList)) {
                $n = 0;
                foreach ($this->tagKeyValueParamList as $item) {
                    $res['TagKeyValueParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TagKeyValueParamList'])) {
            if (!empty($map['TagKeyValueParamList'])) {
                $model->tagKeyValueParamList = [];
                $n                           = 0;
                foreach ($map['TagKeyValueParamList'] as $item) {
                    $model->tagKeyValueParamList[$n++] = null !== $item ? tagKeyValueParamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
