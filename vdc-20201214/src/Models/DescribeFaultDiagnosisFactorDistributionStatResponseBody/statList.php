<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisFactorDistributionStatResponseBody;

use AlibabaCloud\Tea\Model;

class statList extends Model
{
    /**
     * @example UNKNOWN
     *
     * @var string
     */
    public $factorId;

    /**
     * @example 449
     *
     * @var int
     */
    public $userCount;

    /**
     * @example 0.9239
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return statList
     */
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
