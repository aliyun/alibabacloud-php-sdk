<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisFactorDistributionStatResponseBody;

use AlibabaCloud\Dara\Model;

class statList extends Model
{
    /**
     * @var string
     */
    public $factorId;
    /**
     * @var int
     */
    public $userCount;
    /**
     * @var float
     */
    public $userRatio;
    protected $_name = [
        'factorId'  => 'FactorId',
        'userCount' => 'UserCount',
        'userRatio' => 'UserRatio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->factorId) {
            $res['FactorId'] = $this->factorId;
        }

        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }

        if (null !== $this->userRatio) {
            $res['UserRatio'] = $this->userRatio;
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
        if (isset($map['FactorId'])) {
            $model->factorId = $map['FactorId'];
        }

        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        if (isset($map['UserRatio'])) {
            $model->userRatio = $map['UserRatio'];
        }

        return $model;
    }
}
