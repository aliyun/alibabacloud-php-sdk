<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyImageAdvancedAttributeRequest\flag;
use AlibabaCloud\Tea\Model;

class ModifyImageAdvancedAttributeRequest extends Model
{
    /**
     * @var flag[]
     */
    public $flag;

    /**
     * @var string
     */
    public $imageId;

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
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $supportIoOptimized;
    protected $_name = [
        'flag'                 => 'Flag',
        'imageId'              => 'ImageId',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'supportIoOptimized'   => 'SupportIoOptimized',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = [];
            if (null !== $this->flag && \is_array($this->flag)) {
                $n = 0;
                foreach ($this->flag as $item) {
                    $res['Flag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->supportIoOptimized) {
            $res['SupportIoOptimized'] = $this->supportIoOptimized;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyImageAdvancedAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flag'])) {
            if (!empty($map['Flag'])) {
                $model->flag = [];
                $n           = 0;
                foreach ($map['Flag'] as $item) {
                    $model->flag[$n++] = null !== $item ? flag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SupportIoOptimized'])) {
            $model->supportIoOptimized = $map['SupportIoOptimized'];
        }

        return $model;
    }
}
