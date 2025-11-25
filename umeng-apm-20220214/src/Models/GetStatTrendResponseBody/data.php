<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetStatTrendResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $affectedUserCount;

    /**
     * @var float
     */
    public $affectedUserRate;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var float
     */
    public $errorRate;

    /**
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'affectedUserCount' => 'affectedUserCount',
        'affectedUserRate' => 'affectedUserRate',
        'errorCount' => 'errorCount',
        'errorRate' => 'errorRate',
        'timePoint' => 'timePoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedUserCount) {
            $res['affectedUserCount'] = $this->affectedUserCount;
        }

        if (null !== $this->affectedUserRate) {
            $res['affectedUserRate'] = $this->affectedUserRate;
        }

        if (null !== $this->errorCount) {
            $res['errorCount'] = $this->errorCount;
        }

        if (null !== $this->errorRate) {
            $res['errorRate'] = $this->errorRate;
        }

        if (null !== $this->timePoint) {
            $res['timePoint'] = $this->timePoint;
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
        if (isset($map['affectedUserCount'])) {
            $model->affectedUserCount = $map['affectedUserCount'];
        }

        if (isset($map['affectedUserRate'])) {
            $model->affectedUserRate = $map['affectedUserRate'];
        }

        if (isset($map['errorCount'])) {
            $model->errorCount = $map['errorCount'];
        }

        if (isset($map['errorRate'])) {
            $model->errorRate = $map['errorRate'];
        }

        if (isset($map['timePoint'])) {
            $model->timePoint = $map['timePoint'];
        }

        return $model;
    }
}
