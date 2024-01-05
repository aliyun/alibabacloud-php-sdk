<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisSQLInfoResponseBody\stageInfos;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosisSQLInfoResponseBody extends Model
{
    /**
     * @description The queried execution information, including the SQL statement, statistics, execution plan, and operator information.
     *
     * @example {     "DiagnosisSQLInfo": {         "hasSharedStage": false,         "resourceGroup": "user_default",         "cost": 274,         "queuedTime": 0,         "outputDataSize": 9,         "scheduled": true,         "query": "/*+display=tpch_q14*\/SELECT 100.00 * SUM(CASE WHEN p_type LIKE \"PROMO%\" THEN l_extendedprice * (1 - l_discount) ELSE 0 END) / SUM(l_extendedprice * (1 - l_discount)) AS promo_revenue FROM lineitem l, part p WHERE l_partkey = p_partkey AND l_shipdate &gt;= DATE \"1995-09-01\" AND l_shipdate &lt; DATE \"1995-09-01\" + INTERVAL \"1\" MONTH",         "outputRows": 1,         "userName": "test_user",         "parentId": 0,         "maxOutputRows": 200000,         "scanSize": 8247470,         "peakMemory": 13188295,         "startTime": 1626330527632,         "state": "FINISHED",         "endTime": 1626330527905,         "writeTableRows": 0,         "scanRows": 351966     } }
     *
     * @var string
     */
    public $diagnosisSQLInfo;

    /**
     * @description The request ID.
     *
     * @example 1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried execution information by stage.
     *
     * @var stageInfos[]
     */
    public $stageInfos;
    protected $_name = [
        'diagnosisSQLInfo' => 'DiagnosisSQLInfo',
        'requestId'        => 'RequestId',
        'stageInfos'       => 'StageInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosisSQLInfo) {
            $res['DiagnosisSQLInfo'] = $this->diagnosisSQLInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stageInfos) {
            $res['StageInfos'] = [];
            if (null !== $this->stageInfos && \is_array($this->stageInfos)) {
                $n = 0;
                foreach ($this->stageInfos as $item) {
                    $res['StageInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisSQLInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnosisSQLInfo'])) {
            $model->diagnosisSQLInfo = $map['DiagnosisSQLInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StageInfos'])) {
            if (!empty($map['StageInfos'])) {
                $model->stageInfos = [];
                $n                 = 0;
                foreach ($map['StageInfos'] as $item) {
                    $model->stageInfos[$n++] = null !== $item ? stageInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
