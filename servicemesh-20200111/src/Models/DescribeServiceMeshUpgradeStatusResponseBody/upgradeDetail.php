<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshUpgradeStatusResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeDetailGatewayStatusRecordValue;
use AlibabaCloud\Tea\Model;

class upgradeDetail extends Model
{
    /**
     * @var int
     */
    public $finishedGatewaysNum;

    /**
     * @var UpgradeDetailGatewayStatusRecordValue[]
     */
    public $gatewayStatusRecord;

    /**
     * @var string
     */
    public $meshStatus;

    /**
     * @var int
     */
    public $totalGatewaysNum;
    protected $_name = [
        'finishedGatewaysNum' => 'FinishedGatewaysNum',
        'gatewayStatusRecord' => 'GatewayStatusRecord',
        'meshStatus'          => 'MeshStatus',
        'totalGatewaysNum'    => 'TotalGatewaysNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishedGatewaysNum) {
            $res['FinishedGatewaysNum'] = $this->finishedGatewaysNum;
        }
        if (null !== $this->gatewayStatusRecord) {
            $res['GatewayStatusRecord'] = [];
            if (null !== $this->gatewayStatusRecord && \is_array($this->gatewayStatusRecord)) {
                foreach ($this->gatewayStatusRecord as $key => $val) {
                    $res['GatewayStatusRecord'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->meshStatus) {
            $res['MeshStatus'] = $this->meshStatus;
        }
        if (null !== $this->totalGatewaysNum) {
            $res['TotalGatewaysNum'] = $this->totalGatewaysNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upgradeDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishedGatewaysNum'])) {
            $model->finishedGatewaysNum = $map['FinishedGatewaysNum'];
        }
        if (isset($map['GatewayStatusRecord'])) {
            $model->gatewayStatusRecord = $map['GatewayStatusRecord'];
        }
        if (isset($map['MeshStatus'])) {
            $model->meshStatus = $map['MeshStatus'];
        }
        if (isset($map['TotalGatewaysNum'])) {
            $model->totalGatewaysNum = $map['TotalGatewaysNum'];
        }

        return $model;
    }
}
