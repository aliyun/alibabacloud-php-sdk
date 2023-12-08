<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterStrategyCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c8ca91e0907d94efaba7fb0827eb9****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of policies.
     *
     * @example 10
     *
     * @var int
     */
    public $strategyCount;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'strategyCount' => 'StrategyCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->strategyCount) {
            $res['StrategyCount'] = $this->strategyCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['StrategyCount'])) {
            $model->strategyCount = $map['StrategyCount'];
        }

        return $model;
    }
}
