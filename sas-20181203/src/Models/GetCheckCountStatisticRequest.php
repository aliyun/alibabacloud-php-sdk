<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetCheckCountStatisticRequest extends Model
{
    /**
     * @description Type of data statistics. Values:
     * - **user**: Top 5 over-authorized users.
     * - **role**: Top 5 over-authorized roles.
     * - **instance**: Top 5 risky cloud products.
     * @example instance
     *
     * @var string
     */
    public $statisticType;

    /**
     * @description List of cloud vendors.
     *
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'statisticType' => 'StatisticType',
        'vendors'       => 'Vendors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statisticType) {
            $res['StatisticType'] = $this->statisticType;
        }
        if (null !== $this->vendors) {
            $res['Vendors'] = $this->vendors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckCountStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatisticType'])) {
            $model->statisticType = $map['StatisticType'];
        }
        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = $map['Vendors'];
            }
        }

        return $model;
    }
}
