<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\ModifyRefund4DistributionResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 235***343
     *
     * @var int
     */
    public $disputeId;

    /**
     * @example 5
     *
     * @var int
     */
    public $disputeStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $disputeType;

    /**
     * @example DIS_153***851
     *
     * @var string
     */
    public $subDistributionOrderId;
    protected $_name = [
        'disputeId'              => 'DisputeId',
        'disputeStatus'          => 'DisputeStatus',
        'disputeType'            => 'DisputeType',
        'subDistributionOrderId' => 'SubDistributionOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disputeId) {
            $res['DisputeId'] = $this->disputeId;
        }
        if (null !== $this->disputeStatus) {
            $res['DisputeStatus'] = $this->disputeStatus;
        }
        if (null !== $this->disputeType) {
            $res['DisputeType'] = $this->disputeType;
        }
        if (null !== $this->subDistributionOrderId) {
            $res['SubDistributionOrderId'] = $this->subDistributionOrderId;
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
        if (isset($map['DisputeId'])) {
            $model->disputeId = $map['DisputeId'];
        }
        if (isset($map['DisputeStatus'])) {
            $model->disputeStatus = $map['DisputeStatus'];
        }
        if (isset($map['DisputeType'])) {
            $model->disputeType = $map['DisputeType'];
        }
        if (isset($map['SubDistributionOrderId'])) {
            $model->subDistributionOrderId = $map['SubDistributionOrderId'];
        }

        return $model;
    }
}
