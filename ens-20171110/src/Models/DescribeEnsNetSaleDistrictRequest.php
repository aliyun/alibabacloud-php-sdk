<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsNetSaleDistrictRequest extends Model
{
    /**
     * @description The region code.
     *
     *   If you do not specify this parameter, only nodes under the area level that is specified by NetLevelCode are queried.
     *   If you specify this parameter, only child nodes in the area that is specified by NetDistrictCode are queried.
     *
     * @example 100105
     *
     * @var string
     */
    public $netDistrictCode;

    /**
     * @description The network level. Valid values:
     *
     *   **Big**: area
     *   **Middle**: province
     *   **Small**: city
     *
     * @example Big
     *
     * @var string
     */
    public $netLevelCode;
    protected $_name = [
        'netDistrictCode' => 'NetDistrictCode',
        'netLevelCode'    => 'NetLevelCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netDistrictCode) {
            $res['NetDistrictCode'] = $this->netDistrictCode;
        }
        if (null !== $this->netLevelCode) {
            $res['NetLevelCode'] = $this->netLevelCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsNetSaleDistrictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetDistrictCode'])) {
            $model->netDistrictCode = $map['NetDistrictCode'];
        }
        if (isset($map['NetLevelCode'])) {
            $model->netLevelCode = $map['NetLevelCode'];
        }

        return $model;
    }
}
