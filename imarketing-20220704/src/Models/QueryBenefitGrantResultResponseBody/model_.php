<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryBenefitGrantResultResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $amount;

    /**
     * @description 12345
     *
     * @example 123
     *
     * @var string
     */
    public $cloudcodeFlowNo;

    /**
     * @description 12345
     *
     * @example 123
     *
     * @var string
     */
    public $outerCustomerId;

    /**
     * @description 12345
     *
     * @example 123
     *
     * @var string
     */
    public $outerFlowNo;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'amount'          => 'Amount',
        'cloudcodeFlowNo' => 'CloudcodeFlowNo',
        'outerCustomerId' => 'OuterCustomerId',
        'outerFlowNo'     => 'OuterFlowNo',
        'remark'          => 'Remark',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->cloudcodeFlowNo) {
            $res['CloudcodeFlowNo'] = $this->cloudcodeFlowNo;
        }
        if (null !== $this->outerCustomerId) {
            $res['OuterCustomerId'] = $this->outerCustomerId;
        }
        if (null !== $this->outerFlowNo) {
            $res['OuterFlowNo'] = $this->outerFlowNo;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['CloudcodeFlowNo'])) {
            $model->cloudcodeFlowNo = $map['CloudcodeFlowNo'];
        }
        if (isset($map['OuterCustomerId'])) {
            $model->outerCustomerId = $map['OuterCustomerId'];
        }
        if (isset($map['OuterFlowNo'])) {
            $model->outerFlowNo = $map['OuterFlowNo'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
