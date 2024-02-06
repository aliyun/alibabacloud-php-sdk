<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsNetDistrictRequest extends Model
{
    /**
     * @description The code of the region.
     *
     * If you specify this parameter, only nodes in the regions of the level that is specified by this parameter are queried.
     * @example 100106
     *
     * @var string
     */
    public $netDistrictCode;

    /**
     * @description The level of the region.
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
     * @return DescribeEnsNetDistrictRequest
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
