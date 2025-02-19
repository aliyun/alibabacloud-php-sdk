<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class instanceQuotas extends Model
{
    /**
     * @var float
     */
    public $freeCount;
    /**
     * @var string
     */
    public $quotaName;
    /**
     * @var float
     */
    public $totalCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
