<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest\tagKeyValueParamList;
use AlibabaCloud\Tea\Model;

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
     * @description The description of the tag value.
     *
     * Valid values of N: 1 to 10.
     * @example cn-hangzhou
     *
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
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'tagKeyValueParamList' => 'TagKeyValueParamList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
                $n                           = 0;
                foreach ($map['TagKeyValueParamList'] as $item) {
                    $model->tagKeyValueParamList[$n++] = null !== $item ? tagKeyValueParamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
