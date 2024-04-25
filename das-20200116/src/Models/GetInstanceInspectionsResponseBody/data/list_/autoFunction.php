<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class autoFunction extends Model
{
    /**
     * @description Indicates whether the feature of automatically creating and deleting indexes is enabled. Valid values:
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *   **2**: not supported.
     *
     * @example 2
     *
     * @var int
     */
    public $autoIndex;

    /**
     * @description Indicates whether the automatic throttling feature is enabled. Valid values:
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *   **2**: not supported.
     *
     * @example 2
     *
     * @var int
     */
    public $autoLimitedSql;

    /**
     * @description Indicates whether the automatic fragment recycling feature is enabled. Valid values:
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *   **2**: not supported.
     *
     * @example 0
     *
     * @var int
     */
    public $autoResourceOptimize;

    /**
     * @description Indicates whether the auto scaling feature is enabled. Valid values:
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *   **2**: not supported.
     *
     * @example 0
     *
     * @var int
     */
    public $autoScale;

    /**
     * @description Indicates whether the event subscription feature is enabled. Valid values:
     *
     *   **0**: disabled.
     *   **1**: enabled.
     *   **2**: not supported.
     *
     * @example 0
     *
     * @var int
     */
    public $eventSubscription;
    protected $_name = [
        'autoIndex'            => 'AutoIndex',
        'autoLimitedSql'       => 'AutoLimitedSql',
        'autoResourceOptimize' => 'AutoResourceOptimize',
        'autoScale'            => 'AutoScale',
        'eventSubscription'    => 'EventSubscription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoIndex) {
            $res['AutoIndex'] = $this->autoIndex;
        }
        if (null !== $this->autoLimitedSql) {
            $res['AutoLimitedSql'] = $this->autoLimitedSql;
        }
        if (null !== $this->autoResourceOptimize) {
            $res['AutoResourceOptimize'] = $this->autoResourceOptimize;
        }
        if (null !== $this->autoScale) {
            $res['AutoScale'] = $this->autoScale;
        }
        if (null !== $this->eventSubscription) {
            $res['EventSubscription'] = $this->eventSubscription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoFunction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoIndex'])) {
            $model->autoIndex = $map['AutoIndex'];
        }
        if (isset($map['AutoLimitedSql'])) {
            $model->autoLimitedSql = $map['AutoLimitedSql'];
        }
        if (isset($map['AutoResourceOptimize'])) {
            $model->autoResourceOptimize = $map['AutoResourceOptimize'];
        }
        if (isset($map['AutoScale'])) {
            $model->autoScale = $map['AutoScale'];
        }
        if (isset($map['EventSubscription'])) {
            $model->eventSubscription = $map['EventSubscription'];
        }

        return $model;
    }
}
