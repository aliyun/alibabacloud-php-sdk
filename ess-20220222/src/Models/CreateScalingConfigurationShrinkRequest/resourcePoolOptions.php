<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationShrinkRequest;

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
     * @description The resource pool used for instance creation, which can be the public pool or a private pool associated with any active elasticity assurance or capacity reservation. Valid values:
     *
     *   PrivatePoolFirst: prioritizes private pools. When this option is set along with ResourcePoolOptions.PrivatePoolIds, the specified private pools are used first. If you leave ResourcePoolOptions.PrivatePoolIds empty or if the specified private pools lack sufficient capacity, the system will automatically use available open private pools instead. If no matching private pools are available, the system defaults to the public pool.
     *   PrivatePoolOnly: uses only private pools. If you set this value, you must specify ResourcePoolOptions.PrivatePoolIds. If the specified private pools lack sufficient capacity, instance creation will fail.
     *   None: uses no resource pools.
     *
     * Default value: None.
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
