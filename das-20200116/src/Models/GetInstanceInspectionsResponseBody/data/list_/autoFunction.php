<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class autoFunction extends Model
{
    /**
     * @var int
     */
    public $autoIndex;

    /**
     * @var int
     */
    public $autoLimitedSql;

    /**
     * @var int
     */
    public $autoResourceOptimize;

    /**
     * @var int
     */
    public $autoScale;

    /**
     * @var int
     */
    public $eventSubscription;
    protected $_name = [
        'autoIndex' => 'AutoIndex',
        'autoLimitedSql' => 'AutoLimitedSql',
        'autoResourceOptimize' => 'AutoResourceOptimize',
        'autoScale' => 'AutoScale',
        'eventSubscription' => 'EventSubscription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
