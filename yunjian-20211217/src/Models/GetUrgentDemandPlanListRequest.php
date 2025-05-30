<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;

class GetUrgentDemandPlanListRequest extends Model
{
    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $period;

    /**
     * @var int
     */
    public $planType;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'current' => 'current',
        'period' => 'period',
        'planType' => 'planType',
        'size' => 'size',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->planType) {
            $res['planType'] = $this->planType;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['planType'])) {
            $model->planType = $map['planType'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
