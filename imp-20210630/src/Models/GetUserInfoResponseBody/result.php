<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 是否开启应用创建限制
     *
     * @var bool
     */
    public $enableCreateAppLimit;

    /**
     * @description 是否开通服务
     *
     * @var bool
     */
    public $hasOrderedImp;

    /**
     * @description 是否欠费
     *
     * @var bool
     */
    public $isOverdue;

    /**
     * @description 是否购买时长套餐
     *
     * @var bool
     */
    public $isPayByWatchTimeLengthUser;

    /**
     * @description 最大的限制
     *
     * @var int
     */
    public $maxCreateAppCount;
    protected $_name = [
        'enableCreateAppLimit'       => 'EnableCreateAppLimit',
        'hasOrderedImp'              => 'HasOrderedImp',
        'isOverdue'                  => 'IsOverdue',
        'isPayByWatchTimeLengthUser' => 'IsPayByWatchTimeLengthUser',
        'maxCreateAppCount'          => 'MaxCreateAppCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableCreateAppLimit) {
            $res['EnableCreateAppLimit'] = $this->enableCreateAppLimit;
        }
        if (null !== $this->hasOrderedImp) {
            $res['HasOrderedImp'] = $this->hasOrderedImp;
        }
        if (null !== $this->isOverdue) {
            $res['IsOverdue'] = $this->isOverdue;
        }
        if (null !== $this->isPayByWatchTimeLengthUser) {
            $res['IsPayByWatchTimeLengthUser'] = $this->isPayByWatchTimeLengthUser;
        }
        if (null !== $this->maxCreateAppCount) {
            $res['MaxCreateAppCount'] = $this->maxCreateAppCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableCreateAppLimit'])) {
            $model->enableCreateAppLimit = $map['EnableCreateAppLimit'];
        }
        if (isset($map['HasOrderedImp'])) {
            $model->hasOrderedImp = $map['HasOrderedImp'];
        }
        if (isset($map['IsOverdue'])) {
            $model->isOverdue = $map['IsOverdue'];
        }
        if (isset($map['IsPayByWatchTimeLengthUser'])) {
            $model->isPayByWatchTimeLengthUser = $map['IsPayByWatchTimeLengthUser'];
        }
        if (isset($map['MaxCreateAppCount'])) {
            $model->maxCreateAppCount = $map['MaxCreateAppCount'];
        }

        return $model;
    }
}
