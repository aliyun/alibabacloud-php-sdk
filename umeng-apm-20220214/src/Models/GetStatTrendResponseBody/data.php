<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetStatTrendResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 52
     *
     * @var int
     */
    public $affectedUserCount;

    /**
     * @example 10.3
     *
     * @var float
     */
    public $affectedUserRate;

    /**
     * @example 120
     *
     * @var int
     */
    public $errorCount;

    /**
     * @example 25.6
     *
     * @var float
     */
    public $errorRate;

    /**
     * @example 2021-06-01
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'affectedUserCount' => 'affectedUserCount',
        'affectedUserRate'  => 'affectedUserRate',
        'errorCount'        => 'errorCount',
        'errorRate'         => 'errorRate',
        'timePoint'         => 'timePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
