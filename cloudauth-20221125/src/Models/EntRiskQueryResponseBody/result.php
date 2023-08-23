<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntRiskQueryResponseBody;

use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntRiskQueryResponseBody\result\riskList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $bizCode;

    /**
     * @var riskList[]
     */
    public $riskList;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bizCode'  => 'BizCode',
        'riskList' => 'RiskList',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->riskList) {
            $res['RiskList'] = [];
            if (null !== $this->riskList && \is_array($this->riskList)) {
                $n = 0;
                foreach ($this->riskList as $item) {
                    $res['RiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['RiskList'])) {
            if (!empty($map['RiskList'])) {
                $model->riskList = [];
                $n               = 0;
                foreach ($map['RiskList'] as $item) {
                    $model->riskList[$n++] = null !== $item ? riskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
