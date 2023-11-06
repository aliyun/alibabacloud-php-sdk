<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeIMVInfosResponseBody;

use AlibabaCloud\Tea\Model;

class imvInfos extends Model
{
    /**
     * @example "public."t2"
     *
     * @var string
     */
    public $base;

    /**
     * @example {\"maintenance_calls\" : 1, \"avg_apply_time\" : 2, \"avg_calc_rows\" : 1, \"avg_calc_time\" : 11, \"avg_delta_rows\" : 1, \"avg_maintenance_total_time\" : 14, \"avg_maintenance_total_time_total\" : 14, \"max_apply_time\" : 2, \"max_calc_rows\" : 1, \"max_calc_time\" : 11, \"max_delta_rows\" : 1, \"max_maintenance_total_time\" : 14, \"max_maintenance_total_time_total\" : 14, \"min_apply_time\" : 2, \"min_calc_rows\" : 1, \"min_calc_time\" : 11, \"min_delta_rows\" : 1, \"min_maintenance_total_time\" : 14, \"min_maintenance_total_time_total\" : 14, \"max_outerjoin_apply_time\" : null, \"max_outerjoin_calc_rows\" : null, \"max_outerjoin_calc_time\" : null, \"max_outerjoin_delta_rows\" : null, \"avg_outerjoin_apply_time\" : null, \"avg_outerjoin_calc_rows\" : null, \"avg_outerjoin_calc_time\" : null, \"avg_outerjoin_delta_rows\" : null, \"min_outerjoin_apply_time\" : null, \"min_outerjoin_calc_rows\" : null, \"min_outerjoin_calc_time\" : null, \"min_outerjoin_delta_rows\" : null, \"create_rows\" : null, \"create_time\" : null, \"direct_visited\" : null, \"indirect_visited\" : null, \"max_refresh_rows\" : null, \"max_refresh_time\" : null, \"avg_refresh_rows\" : null, \"avg_refresh_time\" : null, \"min_refresh_rows\" : null, \"min_refresh_time\" : null, \"refresh_calls\" : null, \"avg_wait_lock_time\" : null, \"max_wait_lock_time\" : null, \"min_wait_lock_time\" : null, \"latest_maintenance_time\" : \"2023-08-09T07:39:14.753252+00:00\"}
     *
     * @var string
     */
    public $detailInfo;

    /**
     * @example public."mv1"
     *
     * @var string
     */
    public $MV;
    protected $_name = [
        'base'       => 'Base',
        'detailInfo' => 'DetailInfo',
        'MV'         => 'MV',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->base) {
            $res['Base'] = $this->base;
        }
        if (null !== $this->detailInfo) {
            $res['DetailInfo'] = $this->detailInfo;
        }
        if (null !== $this->MV) {
            $res['MV'] = $this->MV;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imvInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Base'])) {
            $model->base = $map['Base'];
        }
        if (isset($map['DetailInfo'])) {
            $model->detailInfo = $map['DetailInfo'];
        }
        if (isset($map['MV'])) {
            $model->MV = $map['MV'];
        }

        return $model;
    }
}
