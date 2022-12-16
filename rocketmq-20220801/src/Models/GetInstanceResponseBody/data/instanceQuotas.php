<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceQuotas extends Model
{
    /**
     * @example 20
     *
     * @var float
     */
    public $freeCount;

    /**
     * @example TOPIC_COUNT
     *
     * @var string
     */
    public $quotaName;

    /**
     * @example 100
     *
     * @var float
     */
    public $totalCount;

    /**
     * @example 10
     *
     * @var float
     */
    public $usedCount;
    protected $_name = [
        'freeCount'  => 'freeCount',
        'quotaName'  => 'quotaName',
        'totalCount' => 'totalCount',
        'usedCount'  => 'usedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->freeCount) {
            $res['freeCount'] = $this->freeCount;
        }
        if (null !== $this->quotaName) {
            $res['quotaName'] = $this->quotaName;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->usedCount) {
            $res['usedCount'] = $this->usedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceQuotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['freeCount'])) {
            $model->freeCount = $map['freeCount'];
        }
        if (isset($map['quotaName'])) {
            $model->quotaName = $map['quotaName'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }
        if (isset($map['usedCount'])) {
            $model->usedCount = $map['usedCount'];
        }

        return $model;
    }
}
