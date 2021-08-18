<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisFactorDistributionStatResponseBody;

use AlibabaCloud\Tea\Model;

class statList extends Model
{
    /**
     * @description 影响因素ID： 1：发布端网络差 2：订阅端网络差 3：发布端设备性能差 4：发布端关闭摄像头 5：发布端切到后台运行，UNKNOWN：未知
     *
     * @var string
     */
    public $factorId;

    /**
     * @description 影响用户数
     *
     * @var int
     */
    public $userCount;

    /**
     * @description 影响用户占比
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
