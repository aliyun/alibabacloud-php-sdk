<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data\solutionDetail;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {"extend":{"mode":"wizard","resourceGroup":"S_res_group_287114642182658_1560324290517"},"nodeDef":{},"order":{"hops":[{"from":"datahub_8htXSsfiS2vtZCVG","to":"datahub_CRHBAyGfhSaLmv2f"}]},"setting":{"errorLimit":{},"jvmOption":""},"steps":[{"stepType":"datahub","category":"writer","displayName":"DataHub1","parameter":{"batchSize":1000,"datasource":"datahub_cloud_dev_test","topic":"dwd_tfc_opt_speed_rid_amap_rt"},"name":"datahub_CRHBAyGfhSaLmv2f","gui":{"x":262,"y":325}},{"stepType":"datahub","displayName":"DataHub2","parameter":{"datasource":"datahub_uric_test","topic":"dwd_tfc_opt_speed_rid_amap_rt_330000","batchSize":1000},"name":"datahub_8htXSsfiS2vtZCVG","gui":{"x":268,"y":160.5},"category":"writer"}]}
     *
     * @var string
     */
    public $code;

    /**
     * @example fileId:[100] is invalid.
     *
     * @var string
     */
    public $message;

    /**
     * @var solutionDetail
     */
    public $solutionDetail;

    /**
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'           => 'Code',
        'message'        => 'Message',
        'solutionDetail' => 'SolutionDetail',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->solutionDetail) {
            $res['SolutionDetail'] = null !== $this->solutionDetail ? $this->solutionDetail->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SolutionDetail'])) {
            $model->solutionDetail = solutionDetail::fromMap($map['SolutionDetail']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
