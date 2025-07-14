<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest;

use AlibabaCloud\Tea\Model;

class resourcePoolOptions extends Model
{
    /**
     * @description The IDs of private pools. The ID of a private pool is the same as the ID of the elasticity assurance or capacity reservation that is associated with the private pool. You can specify the IDs of only targeted private pools for this parameter.
     *
     * @var string[]
     */
    public $privatePoolIds;

    /**
     * @description Specifies which resource pools to use to create instances. Resource pools include the public pool and the private pools that are associated with elasticity assurance and capacity reservations in the Active state. Valid values:
     *
     *   PrivatePoolFirst: uses private pools first. If you set this parameter to PrivatePoolFirst, you can specify ResourcePoolOptions.PrivatePoolIds or leave ResourcePoolOptions.PrivatePoolIds empty. If you specify ResourcePoolOptions.PrivatePoolIds, the specified private pools are used first. If you leave ResourcePoolOptions.PrivatePoolIds empty or the private pools that you specify in ResourcePoolOptions.PrivatePoolIds have insufficient capacity, matching open private pools are used. If no matching open private pools exist, the public pool is used.
     *   PrivatePoolOnly: uses only private pools. If you set this parameter to PrivatePoolOnly, you must specify ResourcePoolOptions.PrivatePoolIds. If the private pools that you specify in ResourcePoolOptions.PrivatePoolIds have insufficient capacity, instances cannot be created.
     *   PublicPoolOnly: uses the public pool.
     *
     * Default value: PublicPoolOnly.
     *
     * @example PrivatePoolFirst
     *
     * @var string
     */
    public $strategy;
    protected $_name = [
        'privatePoolIds' => 'PrivatePoolIds',
        'strategy' => 'Strategy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->privatePoolIds) {
            $res['PrivatePoolIds'] = $this->privatePoolIds;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePoolOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivatePoolIds'])) {
            if (!empty($map['PrivatePoolIds'])) {
                $model->privatePoolIds = $map['PrivatePoolIds'];
            }
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
