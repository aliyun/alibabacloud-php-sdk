<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticResultByEsnBizProvince30MResponseBody;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $provinceId;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'result'     => 'Result',
        'provinceId' => 'ProvinceId',
        'count'      => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->provinceId) {
            $res['ProvinceId'] = $this->provinceId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ProvinceId'])) {
            $model->provinceId = $map['ProvinceId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
