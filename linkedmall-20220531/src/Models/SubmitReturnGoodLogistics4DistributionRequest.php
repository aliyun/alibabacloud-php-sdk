<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models;

use AlibabaCloud\Tea\Model;

class SubmitReturnGoodLogistics4DistributionRequest extends Model
{
    /**
     * @var string
     */
    public $cpCode;

    /**
     * @var int
     */
    public $disputeId;

    /**
     * @var string
     */
    public $distributorId;

    /**
     * @var string
     */
    public $logisticsNo;

    /**
     * @var string
     */
    public $subDistributionOrderId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'cpCode'                 => 'CpCode',
        'disputeId'              => 'DisputeId',
        'distributorId'          => 'DistributorId',
        'logisticsNo'            => 'LogisticsNo',
        'subDistributionOrderId' => 'SubDistributionOrderId',
        'tenantId'               => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpCode) {
            $res['CpCode'] = $this->cpCode;
        }
        if (null !== $this->disputeId) {
            $res['DisputeId'] = $this->disputeId;
        }
        if (null !== $this->distributorId) {
            $res['DistributorId'] = $this->distributorId;
        }
        if (null !== $this->logisticsNo) {
            $res['LogisticsNo'] = $this->logisticsNo;
        }
        if (null !== $this->subDistributionOrderId) {
            $res['SubDistributionOrderId'] = $this->subDistributionOrderId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitReturnGoodLogistics4DistributionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpCode'])) {
            $model->cpCode = $map['CpCode'];
        }
        if (isset($map['DisputeId'])) {
            $model->disputeId = $map['DisputeId'];
        }
        if (isset($map['DistributorId'])) {
            $model->distributorId = $map['DistributorId'];
        }
        if (isset($map['LogisticsNo'])) {
            $model->logisticsNo = $map['LogisticsNo'];
        }
        if (isset($map['SubDistributionOrderId'])) {
            $model->subDistributionOrderId = $map['SubDistributionOrderId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
